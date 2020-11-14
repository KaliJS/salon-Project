<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServicesCategories extends Model
{
    use HasFactory;
    use Softdeletes;

    protected $table = 'service_categories';
    public $timestamps = true;

    protected $casts = [
        'cost' => 'float'
    ];

    protected $guarded = ['id'];
}