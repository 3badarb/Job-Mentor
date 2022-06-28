<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\job;

use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;
use JetBrains\PhpStorm\NoReturn;
use phpDocumentor\Reflection\Types\Static_;



class SignController extends Controller
{
    //
    protected string $portmodel1='http://192.168.43.156:3000/model1';
    protected string $portmodel2='http://192.168.43.156:3000/modle2';

    public function signAsUser(){

            $attributes = $this->getValidatFirstSign() + ['tag' => 'U'];

            $attributes['password'] = bcrypt($attributes['password']);
            $attributes['name'] = ucwords($attributes['name']);

            $user = User::create($attributes);
            auth()->login($user);
            return redirect('/continue-user');

    }

    public function signAsCompany(){

            $attributes = $this->getValidatFirstSign() + ['tag' => 'C'];

            $attributes['password'] = bcrypt($attributes['password']);
            $attributes['name'] = ucwords($attributes['name']);

            $user = User::create($attributes);


            auth()->login($user);

            return redirect('/continue-co');

    }

    public function storeinfo(){
        if(auth()->user()->tag === 'U'){

        $infos=$this->getValidateuser();

            try {
                $response=Http::post($this->portmodel1,[
                    'cv'=>$infos['education'].$infos['expirence'].$infos['skills']
                ]);

                $infos['jobtitle']=$response['jobtitle'];
            }
            catch (\Illuminate\Http\Client\ConnectionException $e){
                $infos['jobtitle']="don't work i am princess";
            }

            //////the Digest of CV///////////////////////////////////////////////////////////
//            try {
//                $response=Http::post($this->portmodel1,[
//                    'cv'=>$infos['education'].$infos['expirence'].$infos['skills']
//                ]);
//
//                $infos['about_me']=$response['cv'];
//            }
//            catch (\Illuminate\Http\Client\ConnectionException $e){
//                $infos['about_me']="I am Cool";
//            }
            $infos['about_me']="I am Cool";

            if(request('avatar') !== null)
                $infos['avatar']=\request()->file('avatar')->store('avatar');

        auth()->user()->userinfo()->create($infos);

        return redirect('/continue-user2');
        }
        elseif (auth()->user()->tag === 'C'){

            $infos=$this->getValidatecompany();



            if(request('avatar') !== null)
                $infos['avatar']=\request()->file('avatar')->store('avatar');

            auth()->user()->companyinfo()->updateOrCreate($infos);
           // return redirect(/*##  the next page  ##*/);
            return redirect('/profileCompany');
        }

        return auth()->user();
    }

    public function changejobtitle(){

        auth()->user()->userinfo()->update(['jobtitle'=>\request('jobtitle')]);

        return redirect('/continue-user3');

    }
    public function changepassword(){

        if (bcrypt(\request('current_password'))!== auth()->user()->password)
        {
            return back()->with('password',"Wrong password");
        }

        $var=\request()->validate([
            'password'=>'required|min:4|confirmed'
        ]);
        auth()->user()->update($var);

        return back();

    }
    public function updatejobtitle(){


        auth()->user()->userinfo()->update(['jobtitle'=>\request('jobtitle')]);
        return back();
    }

    public function update(){

        if(auth()->user()->tag === 'U'){


            $infos=$this->getValidateuser();

            try {
                $response=Http::post($this->portmodel1,[
                    'cv'=>$infos['education'].$infos['expirence'].$infos['skills']
                ]);

                $infos['jobtitle']=$response['jobtitle'];

            }
            catch (\Illuminate\Http\Client\ConnectionException $e){
                $infos['jobtitle']="don't work i am princess";

            }

            //the digest of CV////////////////////////////////////////////////////////////////////
//            try {
//                $response=Http::post('http://192.168.43.156:3000/userClass',[
//                    'cv'=>$infos['education'].$infos['expirence'].$infos['skills']
//                ]);
//
//                $infos['about_me']=$response['cv'];
//            }
//            catch (\Illuminate\Http\Client\ConnectionException $e){
//                $infos['about_me']="I am Cool";
//            }

            if(request('avatar') !== null) {
                \Illuminate\Support\Facades\File::delete("storage/".auth()->user()->userinfo->avatar);
                $infos['avatar'] = \request()->file('avatar')->store('avatar');
            }

            auth()->user()->userinfo()->update($infos);
            return back();
        }
        elseif (auth()->user()->tag === 'C'){

            $infos=$this->getValidatecompany();

            if(request('avatar') !== null) {
                \Illuminate\Support\Facades\File::delete("storage/" . auth()->user()->companyinfo->avatar);
                $infos['avatar'] = \request()->file('avatar')->store('avatar');
            }

            auth()->user()->companyinfo()->update($infos);

            // return redirect(/*##  the next page  ##*/);
            return back();
        }

    }
    public function postajob(){
        $info=$this->getValidatejob();

        try {
            $response=Http::post($this->portmodel2,[
                'yoe'=>\request('yoe'),
                'job title'=>$info['jobtitle'],
                'cv'=>$info['requirement'].$info['expirence']

            ]);

            $infos['evaluation']=$response['rating'];
        }
        catch (\Illuminate\Http\Client\ConnectionException $e){
            $info['evaluation']='2';
        }


        auth()->user()->job()->updateOrCreate($info);

        return back();


    }
    public function deleteajob($id){
        $x=job::find($id);
        $x->delete();
        return redirect('/profileCompany');

    }
    public function editajob($id){
        $x=job::find($id);

        $x->update($this->getValidatejob());

        return redirect('/myjob-details/'.$id);
    }

    public function logingOut(){

        auth()->logout();
        return redirect('/');

    }
    public  function logingIn(){

        $attributes=request()->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if (auth()->attempt($attributes)){
            session()->regenerate();

            return redirect('/');

        }
        return back()->withInput()
            ->withErrors(['email'=>'Something wrong with your credentials']);
    }
public function getValidatFirstSign(){

        return request()->validate([

            'name'=>'required',
            'email'=>'email|required|unique:users,email',
            'password'=>'required|min:4|confirmed'

        ]);
}
public function getValidateuser(){
    return (request()->validate([
        'education'=> 'required' ,
        'skills'=>'required',
        'expirence'=>'required',
        'resident'=>'required',
        'from'=>'required',
        'birth'=>'required|date',
        'phone'=>'required|numeric',
            'avatar'=>'image'
    ]))+['user_id'=>auth()->id()
    ];

}
public function getValidatecompany()
{

        return (request()->validate([
                'about_us'=>'required',
                'location'=>'required',
                'telephone'=>'required|numeric',
                'website'=>'required',
                'avatar'=>'image'

            ]))+['user_id'=>auth()->id()];

}

public function getValidatejob(){
    return (request()->validate([
            'description'=>'required',
            'requirement'=>'required',
            'jobtitle'=>'required',
            'expirence'=>'required',
            'salary'=>'required'

        ]))+['user_id'=>auth()->id()];

}
}
