<?php

namespace App\Http\Controllers;

use App\Models\companyinfo;
use App\Models\pdf;
use App\Models\userinfo;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\job;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;
use JetBrains\PhpStorm\NoReturn;
use phpDocumentor\Reflection\Types\Static_;

class jobController extends Controller
{
    //
    protected string $ner='http://192.168.43.156:3000/spacy';
    public function search(){

        $job=job::with(['myuser','myuser.companyinfo'])->latest()->filter()->paginate(10);
        return view('/search-result',['jobs'=>$job]);

    }
    public function showapplier(job $job){

        $candidates=$job->users()->where('reject',0)->paginate(10);
        return view('/candidate-list',['users'=>$candidates , 'job_id'=>$job->id]);




    }
    public function theperfects(job $job){

//        $u=userinfo::with('user')->where('jobtitle','like','%'.$job->jobtitle.'%')
//            ->whereHas('user.model2',function ($query)use($job){
//                $query->whereBetween('evaluation', [$job->evaluation - 1, $job->evaluation + 1]);
//            })
//            ->paginate(10);
//        $k=pdf::with('user')->where('jobtitle','like','%'.$job->jobtitle.'%')
//            ->whereHas('user.model2',function ($query)use($job){
//                $query->whereBetween('evaluation', [$job->evaluation - 1, $job->evaluation + 1]);
//            })
//            ->paginate(10);
        $u=User::whereHas('userinfo',function (Builder $query)  use ($job) {
            $query->where('jobtitle','like','%'.$job->jobtitle.'%');
        })
            ->whereHas('model2',function ($query)use($job){
                $query->whereBetween('evaluation', [$job->evaluation - 1, $job->evaluation + 1]);
            })->paginate(10);
        $k=User::whereHas('userpdf',function (Builder $query)  use ($job) {
            $query->where('jobtitle','like','%'.$job->jobtitle.'%');
        })
            ->whereHas('model2',function ($query)use($job){
                $query->whereBetween('evaluation', [$job->evaluation - 1, $job->evaluation + 1]);
            })->paginate(10);
      //  return ($k);
        $total = $u->total() + $k->total();

        $perPage = $u->perPage() + $k->perPage();

        $items = array_merge($u->items(), $k->items());

        usort($items, array($this, 'cmp'));

        $paginator = new LengthAwarePaginator($items, $total, $perPage);



//        return view('/candidate-list',['users'=>$paginator , 'job_id'=>$job->id]);
      return view('/perfectcandidate-list',['users'=>$paginator, 'job_id'=>$job->id]);



    }



    public function apply($id){

        if( !$this->checkapply($id)){
            auth()->user()->jobs()->attach($id);

            return back();
        }
        return back();

    }
    public function reject(User $User,job $job){
        \App\Models\job_user::where('job_id',$job->id)->where('user_id',$User->id)->update(['reject'=>1]);
        $user=$User->userpdf()->exists() ? $User->userpdf : $User->userinfo;
        try {
            $response=Http::post( $this->ner,[
                'cv'=>$user->education.$user->skills.$user->expirence,
                'req'=>$job->requirement.$job->expirenec
            ]);

            $diff=$response['difference'];

        }
        catch (\Illuminate\Http\Client\ConnectionException $e){
            $diff='Something went wrong...';

        }
        \App\Models\job_user::where('job_id',$job->id)->where('user_id',$User->id)->update(['reject'=>1,'why'=>$diff]);
        return back();
    }
    public static function checkapply($id){


        return auth()->user()->jobs->contains($id);
    }
}
