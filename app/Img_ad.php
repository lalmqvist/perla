<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Img_ad extends Model
{

    protected $guarded = [];

    public function ads()
    {
        return $this->belongsTo('App\Ad');
    }
}
