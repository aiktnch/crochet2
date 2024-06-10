<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Summary extends Model
{
    use HasFactory;
    
    public function post() {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }
    
    public function summary_images() {
        return $this->hasMany(SummaryImage::class);
    }
    
     protected $fillable = [
        'post_id',
        'body'
    ];
}
