<?php

namespace App\Models\Cart\Traits\Relationship;

trait UserRelationship{

    public function cart(){

        return $this->hasMany('Cart::class');

    }
    public function order(){
        return $this->hasMany('order::class');

    }
}
