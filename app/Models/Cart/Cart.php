<?php

namespace App\Models\Cart;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cart\Traits\Relationship\CartRelationship;

class Cart extends Model
{
    use CartRelationship;

    protected $table = 'carts';

    protected $guarded = [];
}
