<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Offers extends Model
{
    use HasFactory;
    use Softdeletes;
    protected $table = 'offers';
    protected $guarded = ["id"];
  

    public function services(){
    	return $this->belongsToMany('App\Models\Services','offers_services','offer_id','service_id');
    }
}
