<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use Sluggable;

    protected $fillable = ['title'];
    
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}
