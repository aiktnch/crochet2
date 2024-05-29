# タイトル

web.phpの内容
Route::get('/', function() {
    return view('posts.index');
});

Route::get('/', [PostController::class, 'index']);

Route::get('/posts/{post}', [PostController::class ,'show']);