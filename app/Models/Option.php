<?php

namespace App\Models;

use App\Traits\ImageableTrait;
use Illuminate\Database\Eloquent\Model;


class Option extends Model
{
    use ImageableTrait;


    protected $fillable = [
        'article', 'color', 'size', 'product_id'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function products()
    {
        return $this->belongsTo(Product::class);
    }

}
