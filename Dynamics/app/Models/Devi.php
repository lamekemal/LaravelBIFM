<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Devi extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['name', 'email', 'contact', 'category','status'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function sluggable(): array {
        return [
            'slug' => [
                'source' => 'email'
            ]
        ];
    }

}
