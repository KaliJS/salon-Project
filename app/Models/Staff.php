<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Staff extends Model
{
    use HasFactory;
    use Softdeletes;
    protected $table = 'staff_users';
    protected $guarded = ["id"];
    // public function getEmail($email){
    // 	return strtolower($email);
    // }

    // public function setEmail($email){
    // 	return strtolower($email);
    // }

    public function designation(){
    	return $this->hasOne('App\Models\StaffDesignation','id','designation_id');
    }

    public function skills(){
    	return $this->belongsToMany('App\Models\Services','staffs_skills','staff_id','skill_id');
    }
}
