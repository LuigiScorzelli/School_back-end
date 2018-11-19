<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['code', 'name', 'credits', 'startcourse', 'endcourse'];

    public function students(){
        return $this->hasMany('App\Student');
    }

    public function teachers(){
        return $this->belongsToMany('App\Teacher');
    }
}
