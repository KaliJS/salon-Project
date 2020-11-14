<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServicesSubCategories extends Model
{
    use Softdeletes;

    protected $table = 'service_sub_categories';
    
    protected $guarded = ['id'];
    public function category(){
    	return $this->belongsTo("App\Models\ServicesCategories",'category_id','id');
    }

}
