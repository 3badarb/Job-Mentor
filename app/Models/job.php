<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function myuser(){

        return $this->belongsTo(User::class,'user_id');
    }
    public function users(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(User::class)->withPivot('reject')->withTimestamps();
    }


    public function scopeFilter($query){

        $query->where('jobtitle','like','%'.request('search').'%')
            ->orWhere('description','like','%'.request('search').'%')->
            orWhereHas('myuser', function ($query) {
                $query->where('name', 'like', '%'.request('search').'%');});

    }
}
