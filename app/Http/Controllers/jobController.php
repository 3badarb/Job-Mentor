<?php

namespace App\Http\Controllers;

use App\Models\companyinfo;
use App\Models\userinfo;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\job;


use Illuminate\Validation\ValidationException;
use JetBrains\PhpStorm\NoReturn;
use phpDocumentor\Reflection\Types\Static_;

class jobController extends Controller
{
    //
    public function search(){

        $job=job::with(['myuser','myuser.companyinfo'])->latest()->filter()->paginate(10);
        return view('/search-result',['jobs'=>$job]);

    }
    public function showapplier(job $job){

        $candidates=$job->users()->paginate(10);
        return view('/candidate-list',['users'=>$candidates]);




    }
    public function theperfects(job $job){

        $u=userinfo::with('user')->where('jobtitle','like','%'.$job->jobtitle.'%')
            ->whereHas('user.model2',function ($query)use($job){
                $query->whereBetween('evaluation', [$job->evaluation - 2, $job->evaluation + 2]);
            })
            ->paginate(10);



        return view('/perfectcandidate-list',['users'=>$u]);



    }



    public function apply($id){

        if( !$this->checkapply($id)){
            auth()->user()->jobs()->attach($id);

            return back();
        }
        return back();

    }

    public static function checkapply($id){


        return auth()->user()->jobs->contains($id);
    }
}
