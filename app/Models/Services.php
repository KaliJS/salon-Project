<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Services extends Model
{
    use HasFactory;
    use Softdeletes;

    protected $table = 'services';
    public $timestamps = true;

    protected $casts = [
        'cost' => 'float'
    ];

    protected $guarded = ['id'];

    public function category(){
    	return $this->hasOne('App\Models\ServicesCategories','id','category_id');
    }
    public function subcategory(){
    	return $this->hasOne('App\Models\ServicesSubCategories','id','sub_category_id');
    }
    public function presubcategory(){
    	return $this->hasOne('App\Models\ServicesPreSubCategories','id','pre_sub_category_id');
    }
    public function images(){
    	return $this->hasMany('App\Models\ServiceImage','service_id','id');
    }
}
