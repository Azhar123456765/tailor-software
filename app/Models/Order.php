<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];
    public function customerDetail(){
        return $this->belongsTo(Customer::class, 'customer', 'id');
    }
    
}
