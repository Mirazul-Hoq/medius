<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    public function product()
    {
        return $this->belongsToMany('App\Models\Product');
    }

    public function variant()
    {
        return $this->belongsToMany('App\Models\Variant');
    }

    public function product_variant_price()
    {
        return $this->hasMany('App\Models\ProductVariantPrice');
    }
}
