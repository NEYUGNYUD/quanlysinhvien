<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $table = 'scores';

    public function studentSubject() {
        return $this->belongsTo('App\StudentSubject', 'student_subject_id', 'id');
    }
}
