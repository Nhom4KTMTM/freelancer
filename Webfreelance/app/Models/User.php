<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','image','skype','phone','city','chucdanh','groups','gioithieubt','linhvuc','money','trinhdo','status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function thanhpho()
    {
        return $this->hasOne('App\Models\City','id','city');
    }
    public function linhvucc()
    {
        return $this->hasOne('App\Models\Category','id','linhvuc');
    }
}
