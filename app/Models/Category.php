<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'name', 'description', 'slug', 'active', 'parent_id'
    ];


	/**
     * Many to Many relation
     *

     */
	public function products()
	{
		return $this->hasMany(Product::class);
	}


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parentCategories()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subCategories()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
