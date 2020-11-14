<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductsGenric extends Model
{
     use HasFactory;
    use Softdeletes;

    protected $table = 'product_genric_names';
    public $timestamps = true;

    protected $casts = [
        'cost' => 'float'
    ];

    protected $guarded = ['id'];
}
