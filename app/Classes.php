<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'classes';

    public function faculty() {
        return $this->belongsTo('App\Faculty', 'faculty_id', 'id');
    }

    public function students() {
        return $this->hasMany('App\Student', 'class_id', 'id');
    }
}
