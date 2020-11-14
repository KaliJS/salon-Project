<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServicesPreSubCategories extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="service_pre_sub_categories";

    protected $guarded = ['id'];
    
    public function subcategory(){
    	return $this->belongsTo("App\Models\ServicesSubCategories",'subcategory_id','id');
    }
}
