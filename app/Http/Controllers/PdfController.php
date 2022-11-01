<?php

namespace App\Http\Controllers;

use App\Models\job;
use App\Models\pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Smalot\PdfParser\Parser;
class PdfController extends Controller
{
    //
    protected string $sendpdf='http://192.168.43.156:3000/pdf';
    protected string $portmodel1='http://192.168.43.156:3000/model1';
    protected string $portmodel2='http://192.168.43.156:3000/model2';
    protected string $portsummary='http://192.168.43.156:3000/summary';

    public function upload(Request $request){
        $file = $request->file;
        $info['file']=\request()->file('file')->storeAs('file',$file->getClientOriginalName());
        $file->store('file');

        //pdf::first());
        // use of pdf parser to read content from pdf

        //dd($info['file']);

        $pdfParser = new Parser();
        $pdf = $pdfParser->parseFile($file->path());
        $content = $pdf->getText();
        $pdftext = nl2br($content);

        return $pdftext;
        try {
            $response=Http::post($this->sendpdf,[
                'pdf'=>"$pdftext",


            ]);

        //  return $response;
            if (!$response->offsetExists('Skills'))
                $info['skills'] = '';
            else {
                $temp = $response['Skills'];
                $info['skills'] = '';
                for ($i = 0; $i < sizeof($temp); $i++) {

                    $info['skills'] .= $temp[$i] . "\n";

                }
            }
            if (!$response->offsetExists('Education'))
                $info['education'] = '';
            else {
                $temp = $response['Education'];
                $info['education'] = '';
                for ($i = 0; $i < sizeof($temp); $i++) {

                    $info['education'] .= $temp[$i] . "\n";

                }
            }

            if (!$response->offsetExists('Experience'))
                $info['expirence']='';

                else{

            $temp=$response['Experience'];
            $info['expirence']='';
            for ($i=0;$i<sizeof($temp);$i++){

                $info['expirence'].=$temp[$i]."\n";


            }}



        }
        catch (\Illuminate\Http\Client\ConnectionException $e){
            $info['expirence']='';
            $info['education']='';
            $info['skills']='Something went wrong...';

        }
        try {
            $response=Http::post($this->portmodel1,[
                'cv'=>$info['education'].$info['expirence'].$info['skills']
            ]);

            $info['jobtitle']=$response['jobtitle'];
        }
        catch (\Illuminate\Http\Client\ConnectionException $e){
            $info['jobtitle']="Something went wrong try to update your info later...";
        }
        try {
            $response=Http::post($this->portsummary,[
                'cv'=>$info['education'].$info['expirence'].$info['skills']
            ]);

            $info['about_me']=$response['summary'];
        }
        catch (\Illuminate\Http\Client\ConnectionException $e){
            $info['about_me']="there something happend try again";
        }
//        $response=Http::post('http://192.168.43.156:3000/model2',[
//            'cv'=>$info['skills'].$info['education'].$info['expirence'],
//            'yoe'=>2,
//            'job title'=>'Java Developer'
//
//
//        ]);
      //  return $response;
        auth()->user()->userpdf()->create($info);
        return redirect('/continue-pdf');


    }
    public function change(){
        $info['skills']=\request('skills');
        $info['education']=\request('education');
        $info['expirence']=\request('expirence');
        try {
            $response=Http::post($this->portmodel1,[
                'cv'=>$info['education'].$info['expirence'].$info['skills']
            ]);

            $info['jobtitle']=$response['jobtitle'];
        }
        catch (\Illuminate\Http\Client\ConnectionException $e){
            $info['jobtitle']="Something went wrong try to update your info later...";
        }
        try {
            $response=Http::post($this->portsummary,[
                'cv'=>$info['education'].$info['expirence'].$info['skills']
            ]);

            $info['about_me']=$response['summary'];
        }
        catch (\Illuminate\Http\Client\ConnectionException $e){
            $info['about_me']="there something happend try again";
        }

        auth()->user()->userpdf()->update($info);
        return redirect('/continue-pdf2');
    }

    public function changejobtilte(){
        auth()->user()->userpdf()->update(['jobtitle'=>\request('jobtitle')]);

        return redirect('/continue-pdf3');
    }

    public function storemodel2pdf(){
        $infos=auth()->user()->userpdf;
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

        return redirect('profilepdf');
    }
    public function updatemodel2pdf(){
        $infos=auth()->user()->userpdf;
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

        return redirect('profilepdf');
    }
    public function updatepdf(Request $request)
    {

        if (auth()->user()->tag === 'U') {
            if(request('avatar') !== null) {
                \Illuminate\Support\Facades\File::delete("storage/".auth()->user()->userpdf->avatar);
                $info['avatar'] = \request()->file('avatar')->store('avatar');
            }
            if (request('file') !== null) {
                \Illuminate\Support\Facades\File::delete("storage/" . auth()->user()->userpdf->file);

                $file = $request->file;
                $info['file'] = \request()->file('file')->storeAs('file', $file->getClientOriginalName());
                $file->store('file');

                //pdf::first());
                // use of pdf parser to read content from pdf

                //dd($info['file']);

                $pdfParser = new Parser();
                $pdf = $pdfParser->parseFile($file->path());
                $content = $pdf->getText();
                $pdftext = nl2br($content);
            }
            // return dd($pdftext);
            try {
                $response=Http::post($this->sendpdf,[
                    'pdf'=>"$pdftext",


                ]);

                //   return $response;
                $temp=$response['SKILLS'];
                $info['skills']='';
                for ($i=0;$i<sizeof($temp);$i++){

                    $info['skills'] .= $temp[$i]."\n";

                }
                $temp=$response['Education'];
                $info['education']='';
                for ($i=0;$i<sizeof($temp);$i++){

                    $info['education'].=$temp[$i]."\n";

                }
                $temp=$response['Experience'];
                $info['expirence']='';
                for ($i=0;$i<sizeof($temp);$i++){

                    $info['expirence'].=$temp[$i]."\n";


                }



            }
            catch (\Illuminate\Http\Client\ConnectionException $e){
                $info['expirence']='';
                $info['education']='';
                $info['skills']='Something went wrong...';

            }
            try {
                $response=Http::post($this->portmodel1,[
                    'cv'=>$info['education'].$info['expirence'].$info['skills']
                ]);

                $info['jobtitle']=$response['jobtitle'];
            }
            catch (\Illuminate\Http\Client\ConnectionException $e){
                $info['jobtitle']="Something went wrong try to update your info later...";
            }
            try {
                $response=Http::post($this->portsummary,[
                    'cv'=>$info['education'].$info['expirence'].$info['skills']
                ]);

                $info['about_me']=$response['summary'];
            }
            catch (\Illuminate\Http\Client\ConnectionException $e){
                $info['about_me']="there something happend try again";
            }
//        $response=Http::post('http://192.168.43.156:3000/model2',[
//            'cv'=>$info['skills'].$info['education'].$info['expirence'],
//            'yoe'=>2,
//            'job title'=>'Java Developer'
//
//
//        ]);
            //  return $response;
            //auth()->user()->userpdf()->update($info);



            try {
                $response = Http::post($this->portmodel1, [
                    'cv' => $info['education'] . $info['expirence'] . $info['skills']
                ]);

                $info['jobtitle'] = $response['jobtitle'];

            } catch (\Illuminate\Http\Client\ConnectionException $e) {
                $info['jobtitle'] = "Something went wrong try to update your info later...";

            }

            //the digest of CV////////////////////////////////////////////////////////////////////
            try {
                $response = Http::post($this->portsummary, [
                    'cv' => $info['education'] . $info['expirence'] . $info['skills']
                ]);

                $info['about_me'] = $response['summary'];
            } catch (\Illuminate\Http\Client\ConnectionException $e) {
                $info['about_me'] = "there something happend try again";
            }



            auth()->user()->userpdf()->update($info);
            return back();


        }
    }
    public function perfectjobs(){

        $u=job::with('myuser')->latest()->where('jobtitle','like',auth()->user()->userpdf->jobtitle)->paginate(10);

        return view('/job-list',['jobs'=>$u]);

    }





}
