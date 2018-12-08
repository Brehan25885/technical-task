<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product\Traits\Attribute\ProductAttribute;

class Product extends Model
{
    use ProductAttribute;

    protected $table = 'products';

    protected $guarded = [];
}
