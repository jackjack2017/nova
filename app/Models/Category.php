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
        'title', 'slug'
    ];

	/**
	 * Get the route key for the model.
	 *
	 * @return string
	 */
	public function getRouteKeyName()
	{
	    return request()->segment(1) === 'admin' ? 'id' : 'slug';
	}


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany(Picture::class,'product_id','id')->orderBy('position');
    }

}
