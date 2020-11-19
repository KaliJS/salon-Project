<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OfferService extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'offers_services';

    protected $guarded = ["id"];

    public function customer(){
        return $this->hasOne('App\Models\Customers','id','customer_id');
    }

    public function service(){
        return $this->hasOne('App\Models\Services','id','service_id');
    }

    public function offer(){
        return $this->hasOne('App\Models\Offers','id','offer_id');
    }

}
