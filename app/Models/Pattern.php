<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pattern extends Model
{
    use HasFactory;
    
    public function post() {
        return $this->belongsTo(Post::class);
    }
    
    public function pattern_images() {
        return $this->hasMany(PatternImage::class);
    }
    
     protected $fillable = [
        'post_id',
        'body'
    ];
}
