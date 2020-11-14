<?php

namespace App;

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
        'name', 'email', 'password', 'institute_name', 'institute_id', 'role_id', 'photo_id','is_active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	public function role(){
		return $this->belongsTo('App\Role');
	}
	
	public function institute(){
		return $this->belongsTo('App\Institute','institute_id');
	}
	
	public function photo(){
		return $this->belongsTo('App\Photo');
	}

    public function isAdmin(){

        if($this->role['name'] == 'admin'){
            return true;
        }
        return false;
    }
	
}
