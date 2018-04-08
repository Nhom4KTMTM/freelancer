<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Takejob extends Model
{
    //
    protected $table='takejob';

    protected $fillable=[
    	'id_work','content','id_nguoinhan','name','tghoanthanh','tailieu','phone','status','skype','money'
    ];
    public function ttnguoinhan()
    {
    	return $this->hasOne('App\Models\User','id','id_nguoinhan');
    }
}
