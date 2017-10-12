<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';
    protected $primaryKey = 'id';

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function districts() {
        return $this->hasMany('App\District', 'province_id', 'id');
    }
}
