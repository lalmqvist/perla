<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function ads()
    {
        return $this->belongsToMany('App\Categories', 'ads_category', 'category_id', 'ad_id');
    }
}
