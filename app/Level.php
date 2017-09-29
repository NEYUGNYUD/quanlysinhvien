<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = 'levels';

    protected $fillable = ['name', 'description'];

    public function users() {
        return $this->hasMany('App\User', 'level_id', 'id');
    }

//    public function getAll() {
//        return static::all();
//    }

//    public function create(array $data) {
//        $this->name = $data['name'];
//        $this->description = $data['description'];
//        $this->created_at = $data['created_at'];
//        $this->updated_at = $data['updated_at'];
//        $this->save();
//    }
}
