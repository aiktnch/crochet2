<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatternImage extends Model
{
    use HasFactory;
    
    public function Pattern() {
        return $this->belongsTo(Pattern::class);
    }
    
     protected $fillable = [
        'pattern_id',
        'image_url'
    ];
}
