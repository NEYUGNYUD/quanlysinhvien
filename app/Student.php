<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    public function year() {
        return $this->belongsTo('App\Year', 'year_start', 'id');
    }

    public function studentsSubjects() {
        return $this->hasMany('App\StudentSubject', 'student_id', 'id');
    }

    public function classes() {
        return $this->belongsTo('App\Classes', 'class_id', 'id');
    }

}
