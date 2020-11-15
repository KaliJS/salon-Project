<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SalesPurchases extends Model
{
    use HasFactory;
    use Softdeletes;
    protected $table = 'purchases';
    protected $guarded = ["id"];
    // public function getEmail($email){
    // 	return strtolower($email);
    // }

    // public function setEmail($email){
    // 	return strtolower($email);
    // }

    public function products(){
    	return $this->belongsToMany('App\Models\Products','purchases_products','purchase_id','product_id');
    }
}
