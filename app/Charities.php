<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Charities extends Model
{
    public function ads()
    {
        return $this->belongsToMany('App\Ad', 'ads_charities', 'charity_id', 'ad_id' )->withPivot('sum');;
    }

    
}
