<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Summary;
use App\Models\SummaryImage;
use App\Models\Ingredient;
use App\Models\IngredientImage;
use App\Models\Pattern;
use App\Models\PatternImage;
use Illuminate\Http\Request;
use Cloudinary;
use App\Models\Category;

class PostController extends Controller
{
    public function index(Post $post)
    {
        
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);

    }
    
    public function show(Post $post)
    {
        //dd($post);
        return view('posts.show')->with(['post' => $post]);
    }
    
    public function create()
    {
        $categories = Category::all();
        return view('posts.create')->with(['categories' => $categories]);
    }
    
    public function store(Request $request, Post $post)
    {
        $inputPost = $request['post'];
        $post->fill($inputPost)->save();
        
        $summary = new Summary;
        $summary_image = new SummaryImage;
        $summary->post_id = $post->id;
        $summary->body = $request['summary_body'];
        $summary->save();
        $summary_image->summary_id = $summary->id;
        $summary_image->image_url = Cloudinary::upload($request->file('summary_image')->getRealPath())->getSecurePath();
        $summary_image->save();
        
        $ingredient = new Ingredient;
        $ingredient_image = new IngredientImage;
        $ingredient->post_id = $post->id;
        $ingredient->body = $request['ingredient_body'];
        $ingredient->save();
        $ingredient_image->ingredient_id = $ingredient->id;
        $ingredient_image->image_url = Cloudinary::upload($request->file('ingredient_image')->getRealPath())->getSecurePath();
        $ingredient_image->save();
        
        $pattern = new Pattern;
        $pattern_image = new PatternImage;
        $pattern->post_id = $post->id;
        $pattern->body = $request['pattern_body'];
        $pattern->save();
        $pattern_image->pattern_id = $pattern->id;
        $pattern_image->image_url = Cloudinary::upload($request->file('pattern_image')->getRealPath())->getSecurePath();
        $pattern_image->save();
        
        return redirect('/posts/' . $post->id);
    }
}
?>