<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function ads()
    {
        return $this->belongsToMany('App\Ad', 'ads_categories', 'category_id', 'ad_id');
    }
}
