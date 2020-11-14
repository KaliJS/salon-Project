<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryRetailProducts extends Model
{
    use HasFactory;
    use Softdeletes;

    protected $table = 'retail_products';
    
    protected $guarded = ['id'];

    public function brand(){
    	return $this->hasOne('App\Models\ProductsBrands','id','brand_id');
    }
    
}
