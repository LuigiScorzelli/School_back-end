<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'last_name', 'age', 'points', 'phone', 'email', 'course_id'];

    public function course(){
        return $this->belongsTo('App\Course');
    }
}
