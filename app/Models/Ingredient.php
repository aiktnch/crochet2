<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;
    
    public function post() {
        return $this->belongsTo(Post::class);
    }
    
    public function ingredient_images() {
        return $this->hasMany(Ingredient_image::class);
    }
    
     protected $fillable = [
        'post_id',
        'body'
    ];
}
