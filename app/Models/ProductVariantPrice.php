<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariantPrice extends Model
{
    public function product_variant_one_details()
    {
        return $this->belongsTo('App\Models\ProductVariant', 'product_variant_one');
    }

    public function product_variant_two_details()
    {
        return $this->belongsTo('App\Models\ProductVariant', 'product_variant_two');
    }

    public function product_variant_three_details()
    {
        return $this->belongsTo('App\Models\ProductVariant', 'product_variant_three');
    }
}
