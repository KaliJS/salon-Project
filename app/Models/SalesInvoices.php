<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SalesInvoices extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'invoices';

    protected $guarded = ["id"];

    public function customer(){
        return $this->hasOne('App\Models\Customers','id','customer_id');
    }

    public function services(){
        return $this->belongsToMany('App\Models\Services','invoices_services','invoice_id','service_id');
    }
    public function products(){
        return $this->belongsToMany('App\Models\Products','invoices_products','invoice_id','product_id');
    }

    public function offers(){
        return $this->belongsToMany('App\Models\Offers','invoices_offers','invoice_id','offer_id');
    }

}


