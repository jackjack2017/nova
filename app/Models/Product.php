<?php

namespace App\Models;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $fillable = [
       'name', 'price', 'price_with_discount', 'description',
       'category_id', 'slug', 'brand', 'season', 'style', 'textile', 'new', 'top', 'active',
       'gender', 'discount', 'product_id', 'article'
   ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function options()
    {
        return $this->hasMany(Option::class);
    }


    /**
     * Get all of the owning loggable models.
     */
    public function imageable()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
