<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignController;
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
    Route::post('/updatemodel2',[\App\Http\Controllers\userController::class,'updatemodel2']);




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
    Route::get('/candidate-details/{User}', function (\App\Models\User $User) {
        return view('/candidate-details', ['user' => $User,
            'info' => $User->userinfo]);
    });
    Route::get('/the-perfects/{job}', [\App\Http\Controllers\jobController::class, 'theperfects']);
    Route::get('/continue-co', function () {
        return view('continue-co');
    });
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

    Route::get('/', function () { return view('index',['jobs'=>\App\Models\job::latest()->take(4)->get()]); });
    Route::get('/test',function (){
        $response=Http::post('http://192.168.43.156:3000/spacy',[
            'cv'=>'hobbies playing chess solving rubik cube watching series languages english hindi marathi education details january 2014 january 2017 bachelors degree information technology, first class pune, maharashtra jspms jayawantrao sawant college engineering january 2010 january 2014 diploma information technology, first class nashik, maharashtra k. k. wagh polytechnic january 2010 ssc, first class nashik, maharashtra new era english school blockchain developer blockchain developer - corpcloud global services pvt. ltd skill details blockchain- exprience - 6 months smart contracts- exprience - 6 months dapps- exprience - 6 months mean stack- exprience - 12 monthscompany details company - corpcloud global services pvt. ltd. description - worked productively team identify requirements proposed ideas enhancing product. developing managing users blockchain ount wallets transactions. regularly monitoring smooth executions blockchain transactions wallet functions along identifying correcting possible errors. writing smart contracts, apis documenting them. company - corpcloud global services pvt. ltd. description - identifying complex bugs system resolving them. implemented updated application modules direction seniors. effectively coded required changes alterations checked repository using bit bucket. performed code check-ins check-outs regularly worked apis.'
//,'id'=>1
        //'cv'=>''
        ,
       //    'yoe'=>'2',
           // 'job title'=>'JavaDeveloper'
        ]);

        //$infos['jobtitle']=$response['resume'];


        return $response;
    });

    Route::get('/index', function () { return view('index',['jobs'=>\App\Models\job::latest()->take(4)->get()]); });
    Route::get('/out', function () { auth()->logout();
        return redirect('/');});






