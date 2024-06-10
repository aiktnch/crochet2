<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function summary() {
        return $this->hasOne(Summary::class, 'post_id', 'id');
    }
    public function ingredient() {
        return $this->belongsTo(Ingredient::class);
    }
    public function pattern() {
        return $this->belongsTo(Pattern::class);
    }
    public function comments() {
        return $this->hasMany(Comment::class);
    }
    public function likes() {
        return $this->hasMany(Like::class);
    }
     public function bookmarks() {
        return $this->hasMany(Bookmark::class);
    }
    

    public function getpaginateByLimit(int $limit_count = 10)
    {
    // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'body'
    ];
}
