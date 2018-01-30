<?php

namespace App;

use App\Models\Category;
use App\Models\Picture;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $fillable = [
       'name', 'price', 'price_with_discount', 'description',
       'category_id'
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
