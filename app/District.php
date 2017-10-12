<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'slug', 'province_id'];

    public function province() {
        return $this->belongsTo('App\Province', 'province_id', 'id');
    }

    public function wards() {
        return $this->hasMany('App\Ward', 'district_id', 'id');
    }
}
