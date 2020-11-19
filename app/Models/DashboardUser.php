<?php

namespace App\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DashboardUser extends Authenticatable
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'dashboard_users';

    protected $guarded = ["id"];

    public function staff(){
        return $this->hasOne('App\Models\Staff','id','staff_id');
    }

    public function permissions(){
        return $this->hasMany('App\Models\Permission','user_id','id');
    }  
}

