<?php

namespace App;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class ProductsImages extends Model
{
    protected $fillable = ['product_id', 'img_src'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
