<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    //
    protected $table='work';

    protected $fillable=[
    	'id_nguoithue','content','linhvuc','name','tg_hethan','city','money','status'
    ];
    public function khachhang()
    {
    	return $this->hasOne('App\Models\User','id','id_nguoithue');
    }
    public function linhvuctin()
    {
    	return $this->hasOne('App\Models\Category','id','linhvuc');
    }
    public function thanhpho()
    {
    	return $this->hasOne('App\Models\City','id','city');
    }
    public function chaogia()
    {
        return $this->hasMany('App\Models\Takejob','id_work','id');
    }
}
