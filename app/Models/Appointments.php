<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointments extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'appointments';

    protected $guarded = ["id"];

    public function customer(){
        return $this->hasOne('App\Models\Customers','id','customer_id');
    }

    public function staff(){
        return $this->hasOne('App\Models\Staff','id','staff_id');
    }

    public function services(){
        return $this->belongsToMany('App\Models\Services','appointments_services','appointment_id','service_id');
    }

    public function appointments_details(){
        return $this->hasMany('App\Models\AppointmentService','appointment_id','id');
    }
}
