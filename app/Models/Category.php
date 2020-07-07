<?php

namespace App\Models;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];

    public function children()
    {
        return $this->hasMany(Category::class);
    }

    public function parent()
    {
        return $this->belongsTo(Category::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::saving(function($category){
            $slug = Str::slug($category->name);
            $latest = self::whereRaw("slug REGEXP '^{$slug}(-[0-9]+)?$'")
                ->latest()
                ->value('slug');

            if($latest){
                $pieces = explode('-', $latest);
                $number = intval(end($pieces));
                $slug .= '-' . ($number + 1); 
            }

            $category->slug = $slug;
        });
    }
}
