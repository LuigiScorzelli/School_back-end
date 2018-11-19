<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['name', 'last_name', 'ranking_mark', 'email', 'phone', 'created_at', 'updated_at'];

    public function courses(){
        return $this->belongsTo('App\Course');
    }
}
