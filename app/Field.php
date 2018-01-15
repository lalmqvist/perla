<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{

    public function charities()
    {
        return $this->belongsToMany('App\Charities', 'charity_fields', 'field_id', 'charity_id');
    }
    
}
