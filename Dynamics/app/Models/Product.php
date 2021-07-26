<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['title', 'price', 'slug', 'description', 'image_path','user_id'];

    /*public function post(){
        return $this->hasMany(Post::class);
    }*/

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function sluggable(): array {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
