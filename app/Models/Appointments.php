<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;
    protected $table = 'appointments';
    public $timestamps = true;

    protected $casts = [
        'cost' => 'float'
    ];

    protected $fillable = [
        'id',
        'customer_id',
        'service_id',
        'date',
        'time',
        'staff_id',
        'status',
        'branch_id',
        'created_at',
        'updated_at',
        'deleted_at'
								
    ];
}
