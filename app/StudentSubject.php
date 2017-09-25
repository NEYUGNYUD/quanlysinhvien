<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentSubject extends Model
{
    protected $table = 'students_subjects';
    protected $timestamps = false;

    public function student() {
        return $this->belongsTo('App\Student', 'student_id', 'id');
    }

    public function scores() {
        return $this->hasMany('App\Score', 'student_subject_id', 'id');
    }

    public function subject() {
        return $this->belongsTo('App\Subject', 'subject_id', 'id');
    }
}
