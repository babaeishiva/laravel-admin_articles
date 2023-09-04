<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use Sluggable;
    use HasFactory;

    protected $fillable = ['title', 'slug', 'body','user_id'];

    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ],
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
       return $this->belongsToMany(Category::class);
    }
}
