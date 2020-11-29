<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuickPayment extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'quick_payments';

    protected $guarded = ["id"];

    public function services(){
        return $this->belongsToMany('App\Models\Services','quick_payments_services','quick_payment_id','service_id');
    }
    public function products(){
        return $this->belongsToMany('App\Models\Products','quick_payments_products','quick_payment_id','product_id');
    }

    public function offers(){
        return $this->belongsToMany('App\Models\Offers','quick_payments_offers','quick_payment_id','offer_id');
    }
}
