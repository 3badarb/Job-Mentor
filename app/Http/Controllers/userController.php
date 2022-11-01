<?php

namespace App\Http\Controllers;


use App\Models\job_user;
use App\Models\User;
use App\Models\job;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;
use JetBrains\PhpStorm\NoReturn;
use phpDocumentor\Reflection\Types\Static_;

class userController extends Controller
{
    //

    protected $portmodel2='http://192.168.43.156:3000/model2';

    public function showjobs(User $User){
        $jobs=$User->jobs()->paginate(10);
        return view('myjob-list',['jobs'=>$jobs]);


    }
    public function deleteapply($id){

        if( $this->checkapply($id)){

            auth()->user()->jobs()->detach($id);

            return back();
        }
        return back();


    }
    public function perfectjobs(){

        $u=job::with('myuser')->latest()->where('jobtitle','like',auth()->user()->userinfo->jobtitle)->paginate(10);

        return view('/job-list',['jobs'=>$u]);

    }

    public static function checkapply($id){

        return auth()->user()->jobs->contains($id);
    }

    public function storemodel2(){
            $infos=auth()->user()->userinfo;
        try {
            $response=Http::post( $this->portmodel2,[
                'yoe'=>\request('yoe'),
                'job title'=>$infos->jobtitle,
                'cv'=>$infos['education'].$infos['expirence'].$infos['skills']
            ]);

            $model2=['salary'=>$response['salary'],'evaluation'=>$response['rating']];
//            dd($response['salary']);
        }
        catch (\Illuminate\Http\Client\ConnectionException $e){
            $model2=['salary'=>2,'evaluation'=>3];

        }

        auth()->user()->model2()->Create($model2);

       return redirect('profile');
    }
    public function updatemodel2(){
        $infos=auth()->user()->userinfo;
        try {
            $response=Http::post( $this->portmodel2,[
                'yoe'=>\request('yoe'),
                'job title'=>$infos->jobtitle,
                'cv'=>$infos['education'].$infos['expirence'].$infos['skills']
            ]);

            $model2=['salary'=>$response['salary'],'evaluation'=>$response['rating']];
//            dd($response['salary']);
        }
        catch (\Illuminate\Http\Client\ConnectionException $e){
            $model2=['salary'=>2,'evaluation'=>3];

        }

        auth()->user()->model2()->update($model2);

       return redirect('profile');
    }
    public function rejectdjobs(){

        //$s=auth()->user()->jobs()->wherePivot('reject',1)->get('name');

        return view('rejected-jobs',[
            'jobs'=>auth()->user()->jobs()->wherePivot('reject',1)->paginate(10)
        ]);


    }
    public function why(\App\Models\job $job){
        \App\Models\job_user::where('user_id',auth()->user()->id)->where('job_id',$job->id)->update(['seen'=>1]);
        $why=\App\Models\job_user::where('user_id',auth()->user()->id)->where('job_id',$job->id)->value('why');

        return view('why',['why'=>$why]);




    }


}
