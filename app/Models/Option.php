<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = [
        'article', 'color_id', 'size_id', 'product_id'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function products()
    {
        return $this->belongsTo(Product::class);
    }


    /**
     * Get all of the post's logs.
     */
    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sizes()
    {
        return $this->hasOne(Size::class);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function colors()
    {
        return $this->hasOne(Color::class);
    }
}
