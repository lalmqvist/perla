<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ads_categories extends Model
{
    protected $guarded = [];
    public function ads()
    {
        return $this->belongsTo('App\Ad');
    }
}
