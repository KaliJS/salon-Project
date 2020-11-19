<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentService extends Model
{
    use HasFactory;
    protected $table = 'appointments_services';

    protected $guarded = ["id"];

    public function service(){
        return $this->hasOne('App\Models\Services','id','service_id');
    }

    public function appointment(){
        return $this->hasOne('App\Models\Appointments','id','appointment_id');
    }

    public function staff(){
        return $this->hasOne('App\Models\Staff','id','staff_id');
    }

}
