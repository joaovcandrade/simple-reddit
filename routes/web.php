<?php

use App\Http\Controllers\PostController;
use App\Models\Comment;
use Illuminate\Support\Facades\Route;
use App\Models\Post;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    $posts = Post::all();
    
    return View::make('home')->with('posts', $posts);
});


Route::get('postagem/{id}', function ($id) {
        $post = Post::where('id', $id)->get();
        $comments = Comment::where('post_id', $id)->get();

  
    return View::make('post')->with('post', $post[0])->with('comments', $comments);
});