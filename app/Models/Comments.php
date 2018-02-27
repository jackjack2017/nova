<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Comments extends Model {

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'id', 'body', 'commentable_id', 'commentable_type'
    ];

    /**
     * Get all of the owning commentable models.
     */
    public function commentable()
    {
        return $this->morphTo();
    }
}
