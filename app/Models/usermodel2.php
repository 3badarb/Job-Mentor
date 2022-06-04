<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usermodel2 extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function myuser(){
        return $this->belongsTo(User::class,'userinfo_id');

    }
}
