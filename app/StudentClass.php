<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    protected $table = 'classes';

    protected $fillable = ['name', 'faculty_id', 'slug'];

    public function faculty() {
        return $this->belongsTo('App\Faculty', 'faculty_id', 'id');
    }

    public function students() {
        return $this->hasMany('App\Student', 'class_id', 'id');
    }

    public function getRouteKeyName() {
        return 'slug';
    }
}
