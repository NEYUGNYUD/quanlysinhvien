<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $table = 'faculties';

    public function teachers() {
        return $this->hasMany('App\Teacher', 'faculty_id', 'id');
    }

    public function classes() {
        return $this->hasMany('App\Classes', 'faculty_id', 'id');
    }
}
