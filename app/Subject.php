<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';

    public function studentsSubjects() {
        return $this->hasMany('App\StudentSubject', 'subject_id', 'id');
    }

    public function term() {
        return $this->belongsTo('App\Term', 'term_id', 'id');
    }

    public function teacher() {
        return $this->belongsTo('App\Teacher', 'teacher_id', 'id');
    }
}
