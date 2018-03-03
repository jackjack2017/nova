<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $fillable = [
       'name', 'price', 'price_with_discount', 'description',
       'category_id', 'slug', 'brand', 'season', 'style', 'textile', 'new', 'top', 'active', 'main',
       'gender', 'discount',
       'article', 'size', 'color'
   ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pictures()
    {
        return $this->hasMany(Picture::class,'product_id','id')->orderBy('position');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

}
