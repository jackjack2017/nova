<?php

namespace App\Models;

use App\Traits\ImageableTrait;
use Illuminate\Database\Eloquent\Model;

class Action extends Model {

    use ImageableTrait;

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'name', 'description', 'slug'
    ];



    /**
     * Get all of the action's images
     */
    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }
}
