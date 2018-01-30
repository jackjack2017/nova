<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model {

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'name', 'description', 'slug'
    ];



	/**
     * Many to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
	public function products()
	{
		return $this->hasMany(Product::class);
	}
}
