<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userinfo extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function user(){
        return $this->belongsTo(User::class);
    }
    public function model1(){

        return $this->hasOne(usermodel1::class);

    }

    public function storemodel1($user=null){
        $this->model1()->updateOrCreate(['userinfo_id'=>$user->id,'jobtitle'=>'making boots']);
    }
}
