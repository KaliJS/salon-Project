<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductsBrands extends Model
{
    use HasFactory;
    use Softdeletes;

    protected $table = 'product_brands';
    public $timestamps = true;

    protected $casts = [
        'cost' => 'float'
    ];

    protected $guarded = ['id'];
}
