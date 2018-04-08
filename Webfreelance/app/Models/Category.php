<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table='category';
    
    protected $fillable=['parent','name','status','image'];
 	public function cat_parent(){
    	return $this->hasOne('\App\Models\Category','id','parent');
    }
    public function cat_child()
    {
    	return $this->hasMany('\App\Models\Category','parent','id');
    }
}
