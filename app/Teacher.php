<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';

    protected $fillable = ['code', 'first_name', 'last_name', 'address', 'dob', 'gender', 'email', 'passport', 'phone', 'faculty_id', 'role_id'];

    public function subjects() {
        return $this->hasMany('App\Subject', 'teacher_id', 'id');
    }

    public function role() {
        return $this->belongsTo('App\Role', 'role_id', 'id');
    }

    public function faculty() {
        return $this->belongsTo('App\Faculty', 'faculty_id', 'id');
    }

    public function getRouteKeyName() {
        return 'code';
    }
}
