<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * Get the images for the product.
     */
    public function images()
    {
        return $this->hasMany('App\Image');
    }

    /**
     * Get the user name for the product.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the country name for the product.
     */
    public function country()
    {
        return $this->belongsTo('App\Country');
    }
}
