<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'lname', 'email', 'phone', 'street1', 'street2', 'zip', 'city', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    public function ads()
    {
        return $this->hasMany('App\Ad');
    }

    public function wishlist()
    {
        return $this->hasMany('App\Wishlist');
    }

    public function wishlistads()
    {
        return $this->belongsToMany('App\Ad', 'wishlists', 'user_id', 'ad_id');
    }
}
