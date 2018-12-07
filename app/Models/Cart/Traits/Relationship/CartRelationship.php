<?php

namespace App\Models\Cart\Traits\Relationship;
use  App\Models\Product\Product;
use  App\Models\User\User;

trait CartRelationship{

    public function user()
    {
        return $this->belongsTo(User::class , 'customer_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class , 'cart_product' , 'cart_id' , 'product_id')->withPivot('price' ,'qty')->withTimestamps();
    }




}
