<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InventoryRetailProducts extends Model
{
    use HasFactory;
    use Softdeletes;

    protected $table = 'retail_products';
    
    protected $guarded = ['id'];

    public function product(){
    	return $this->belongsTo('App\Models\Products','product_id','id');
    }
    
}
