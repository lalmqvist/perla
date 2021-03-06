<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ads_charities extends Model
{
    protected $guarded = [];
    
    public function ads()
    {
        return $this->belongsTo('App\Ad')->withPivot('sum');
    }
}
