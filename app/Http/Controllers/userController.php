<?php

namespace App\Http\Controllers;


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
            $response=Http::post('http://192.168.43.156:3000/userClass',[
                'yoe'=>\request('yoe'),
                'job title'=>$infos->jobtitle,
                'cv'=>$infos['education'].$infos['expirence'].$infos['skills']
            ]);

            $model2=$response;
        }
        catch (\Illuminate\Http\Client\ConnectionException $e){
            $model2=['salary'=>2,'evaluation'=>3];
        }
        auth()->user()->model2()->create($model2);
        return back();
    }


}
