<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SummaryImage extends Model
{
    use HasFactory;
    
    public function summary() {
        return $this->belongsTo(Summary::class);
    }
    
     protected $fillable = [
        'summary_id',
        'image_url'
    ];
}
