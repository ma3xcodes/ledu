<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Camment extends Model
{
    /**
     * Get the owning commentable model.
     */
    public function commentable()
    {
        return $this->morphTo();
    }

    /*
     * Get all of the model's comments.
     public function comments()
    {
        return $this->morphMany(App\Models\Comment::class, 'commentable');
    }
    */
}
