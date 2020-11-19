<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceImage extends Model
{
    use HasFactory;
    use Softdeletes;

    protected $table = 'service_images';
    
    protected $guarded = ['id'];

    
}
