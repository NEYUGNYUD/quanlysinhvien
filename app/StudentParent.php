<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentParent extends Model
{
    protected $table = 'parents';

    protected $fillable = ['dad_name', 'dad_job', 'mom_name', 'mom_job', 'dad_phone', 'mom_phone', 'student_id'];

    public $timestamps = false;

    public function students() {
        return $this->belongsTo('App\Student', 'student_id', 'id');
    }
}
