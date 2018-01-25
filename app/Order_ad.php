<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_ad extends Model
{
    
    protected $guarded = [];
    
    public function ads()
    {
        return $this->belongsTo('App\Ad');
    }
    
    public function order()
    {
        return $this->belongsTo('App\Order');
    }

}
