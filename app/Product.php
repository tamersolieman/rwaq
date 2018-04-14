<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * Get the iamges for the product.
     */
    public function images()
    {
        return $this->hasMany('App\Image');
    }
}
