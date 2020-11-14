<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use HasFactory;
    use Softdeletes;

    protected $table = 'products';
    public $timestamps = true;

    protected $casts = [
        'cost' => 'float'
    ];

    protected $guarded = ['id'];

    public function brand(){
    	return $this->hasOne('App\Models\ProductsBrands','id','brand_id');
    }
    public function category(){
    	return $this->hasOne('App\Models\ProductCategory','id','category_id');
    }
    public function genric(){
    	return $this->hasOne('App\Models\ProductsGenric','id','genric_name_id');
    }
}
