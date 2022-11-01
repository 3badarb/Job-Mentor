<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignController;
use App\Http\Controllers\jobController;
use App\Http\Controllers\userController;
use App\Http\Controllers\PdfController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware('candidate')->group(function () {

    Route::put('/change-job-title', [SignController::class, 'changejobtitle']);
    Route::get('/select-the-yoe', function () {
        return view('/continue-user3');
    });
    Route::get('/continue-user', function () {
        return view('continue-user');
    });
    Route::get('/continue-user2', function () {
        return view('/continue-user2');
    });
    Route::get('/continue-user3', function () {
        return view('/continue-user3');
    });
    Route::put('/change-password', [SignController::class, 'changepassword']);
    Route::put('/update', [SignController::class, 'update']);
    Route::put('/update-jobtitle', [SignController::class, 'updatejobtitle']);
    Route::get('/profile', function () {
        return view('profile', [
            'info' => auth()->user()->userinfo,
            'user' => auth()->user()
        ]);
    });

    Route::post('/apply-for/{job}',[\App\Http\Controllers\jobController::class,'apply']);
    Route::get('/show-my-jobs/{User}',[\App\Http\Controllers\userController::class,'showjobs']);
    Route::get('/show-matching-jobs',[\App\Http\Controllers\userController::class,'perfectjobs']);
    Route::delete('/delete-apply/{job}',[\App\Http\Controllers\userController::class,'deleteapply']);
    Route::post('/storemodel2',[\App\Http\Controllers\userController::class,'storemodel2']);
    Route::put('/updatemodel2',[\App\Http\Controllers\userController::class,'updatemodel2']);

    Route::get('/notification',[\App\Http\Controllers\userController::class,'rejectdjobs']);
    Route::get('/know-why/{job}',[userController::class,'why']);
    Route::get('/job-list',function (){
        return view('job-list',[
            'jobs'=>\App\Models\job::with(['myuser','myuser.companyinfo'])->latest()->
            whereBetween('evaluation', [auth()->user()->model2->evaluation - 1, auth()->user()->model2->evaluation + 1])->paginate(10)
        ]);});



});
Route::middleware('company')->group(function () {

    Route::get('/profileCompany', function () {
        return view('profileCompany', [
            'info' => auth()->user()->companyinfo,
            'user' => auth()->user(),
            'jobs' => auth()->user()->job
        ]);
    });
    Route::put('/update', [SignController::class, 'update']);
    Route::post('/post-job', [SignController::class, 'postajob']);

    Route::get('/myjob-details/{job}', function (\App\Models\job $job) {
        return view('/myjob-details', ['job' => $job->load(['myuser', 'myuser.companyinfo'])]);
    });

    Route::delete('/delete-job/{job}', [SignController::class, 'deleteajob']);

    Route::get('/edit-job/{job}', function (\App\Models\job $job) {
        return view('edit-job', ['job' => $job->load(['myuser', 'myuser.companyinfo'])]);
    });

    Route::put('/update-job/{job}', [SignController::class, 'editajob']);


    Route::get('/show-appliers/{job}', [\App\Http\Controllers\jobController::class, 'showapplier']);
    Route::get('/candidate-details/{User}/{job}', function (\App\Models\User $User,\App\Models\job $job) {
        return view('/candidate-details', ['user' => $User,
            'info' => $User->userinfo,
            'job_id'=>$job->id]);
    });
    Route::get('/the-perfects/{job}', [\App\Http\Controllers\jobController::class, 'theperfects']);
    Route::get('/continue-co', function () {
        return view('continue-co');
    });
    Route::post('reject/{User}/{job}',[jobController::class,'reject']);
    Route::get('/job-list',function (){
        return view('job-list',[
            'jobs'=>\App\Models\job::with(['myuser','myuser.companyinfo'])->latest()->paginate(10)
        ]);});
});

    Route::get('/company-details/{User}',function (\App\Models\User $User){return view('/company-details',['user'=>$User]);});

    Route::get('/job-details/{job}',function (\App\Models\job $job){return view('job-details',
     ['job'=>$job->load(['myuser','myuser.companyinfo'])]);});

    Route::get('/job-list',function (){
        return view('job-list',[
        'jobs'=>\App\Models\job::with(['myuser','myuser.companyinfo'])->latest()->paginate(10)
    ]);});
    Route::post('/store-info', [SignController::class, 'storeinfo']);


    Route::get('/search-job',[\App\Http\Controllers\jobController::class,'search']);

    Route::get('/company-list',function (){return view('company-list',[
        'companies'=>\App\Models\User::with('companyinfo')
        ->where('tag','C')->paginate(9)]);});



    Route::get('/log-in', function () { return view('log-in');  });

   // Route::get('/sign-company', function () { return view('sign-company'); });

   // Route::get('/sign-user', function () { return view('sign-user'); });

    Route::get('/sign-up', function () { return view('sign-up'); });

    Route::post('/log-in', [SignController::class,'logingIn']);

    Route::post('/log-out',[SignController::class,'logingOut']);

    Route::post('/sign-as-user',[SignController::class,'signAsUser']);

    Route::post('/sign-as-company',[SignController::class,'signAsCompany']);

    Route::post('/edit',[SignController::class,'update']);

    Route::post('/newtest',function (){

        dd(request());
    });




    Route::get('/index', function () { return view('index',['jobs'=>\App\Models\job::latest()->take(4)->get()]); });
    Route::get('/', function () { return view('index',['jobs'=>\App\Models\job::latest()->take(4)->get()]); });
    Route::get('/test',function (){

            try {
                $response=Http::post('http://192.168.43.156:3000/model2',[

'cv'=>"Badei Ayasso
Machine Learning Engineer | Python Developer
A proactive person, hardworking, self-taught, has the will to learn new technologies. I can adapt with
various working conditions. I can work both on my own and as part of a team.
badei.ay1905@gmail.com 0955674758 Damascus, Syria linkedin.com/in/badei-ayasso-8589b5234
EDUCATION
Bachelor of Engineering
Computer and Automation
10/2016 - 08/2022,
GRADUATION PROJECT
Job Mentor (10/2021 - 08/2022)
Web Platform for Analyzing Resumes Using NLP
Grade : 92/100
SKILLS
Python Machine Learning Deep Learning
Computer Vision NLP Tensorflow spaCy
Sklearn Numpy Opencv Django MySQL
Git Linux REST APIs
CERTIFICATES
Supervised Machine Learning
Coursera Natural Language Processing in Tensorflow
Coursera
Sequence Models
Coursera
Improving Deep Neural Networks
Coursera Neural Networks and Deep Learning
Coursera Data Analysis with Python
Coursera
Building Web Applications in Django
Coursera Web Application Technologies and Django
Coursera
Python Data Structures
Coursera
Using Python to Access Web Data
Coursera
LANGUAGES
Arabic
Native or Bilingual Proficiency
English
Full Professional Proficiency",
                    'yoe'=>0,
                    'job title'=>'Python Developer'
                ]);


            }
            catch (\Illuminate\Http\Client\ConnectionException $e){

            }


            return $response;
    });

    Route::get('/out', function () { auth()->logout();
        return redirect('/');});




    Route::get('/testpdf',function (){return view('pdftest');});
Route::post('/update-pdf-info', [PdfController::class, 'change']);
Route::put('/change-job-title-pdf', [PdfController::class, 'changejobtilte']);
Route::put('/updatepdf', [PdfController::class, 'updatepdf']);

Route::post('/store-pdf', [PdfController::class, 'upload']);
Route::get('/continue-pdf',function (){
    return view('continue-pdf',['info'=>auth()->user()->userpdf]);
});
Route::get('/continue-pdf2', function () {
    return view('/continue-pdf2');
});
Route::get('/continue-pdf3', function () {
    return view('/continue-pdf3');
});
Route::post('/storemodel2pdf',[PdfController::class,'storemodel2pdf']);
Route::post('/updatemodel2pdf',[PdfController::class,'updatemodel2pdf']);
Route::get('/continue-user0', function () {
    return view('continue-user0');
});

Route::get('/profilepdf', function () {
    return view('profilepdf', [
        'info' => auth()->user()->userpdf,
        'user' => auth()->user()
    ]);
});
Route::get('/show-matching-jobs-pdf',[PdfController::class,'perfectjobs']);


Route::get('/choosewhat',function (){ return view('choosewhat');});

