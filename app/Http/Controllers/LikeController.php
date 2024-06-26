<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Like;

class LikeController extends Controller
{
    public function store(Request $request){
        $post_id = $request->input('post_id');
        $user_id = Auth::id();
        $liked = Like::where("user_id", $user_id)->where("post_id", $post_id)->first();
        if($liked) {
            $liked->delete();
        } else {
            $like = new Like();
            $like->post_id = $post_id;
            $like->user_id = $user_id;
            $like->save();
        }
        return redirect('/posts');
    }
}
