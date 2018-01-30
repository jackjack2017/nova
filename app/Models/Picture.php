<?php

namespace App\Models;

use App\Product;
use App\Traits\ImageableTrait;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use ImageableTrait;


    protected $fillable = ['img_url', 'product_id', 'position'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function products()
    {
        return $this->belongsTo(Product::class);
    }

}
