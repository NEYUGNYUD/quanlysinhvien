<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = ['code', 'first_name', 'last_name', 'dob', 'gender', 'address', 'password', 'class_id', 'year_id', 'region', 'is_religion', 'priority', 'nation', 'province', 'district', 'ward', 'nationality', 'passport'];

    public function year() {
        return $this->belongsTo('App\Year', 'year_start', 'id');
    }

    public function studentsSubjects() {
        return $this->hasMany('App\StudentSubject', 'student_id', 'id');
    }

    public function classes() {
        return $this->belongsTo('App\Classes', 'class_id', 'id');
    }

    public function parent() {
        return $this->hasOne('App\Parent', 'student_id', 'id');
    }
}
