<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngredientImage extends Model
{
    use HasFactory;
    
    public function ingredient() {
        return $this->belongsTo(Ingredient::class);
    }
    
     protected $fillable = [
        'ingredient_id',
        'image_url'
        
    ];
}
