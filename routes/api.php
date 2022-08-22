<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RedditController;
use App\Http\Controllers\SubRedditController;
use App\Http\Controllers\CommentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('postagem', [PostController::class,'criarPostagem']);
Route::get('postagem', [PostController::class, 'listarPostagens']);
Route::delete('postagem/deletar/{id}', [PostController::class, 'deletarPostagem']);
Route::put('postagem/{id}', [PostController::class, 'editarPostagem']);
Route::get('postagem/{id}', [PostController::class, 'verPostagem']);


Route::post('postagem/{id}/comentario', [CommentController::class,'criarComentario']);
Route::get('postagem/{id}/comentario', [CommentController::class, 'listarComentarios']);
Route::delete('postagem/{id}/comentario/{id_comentario}', [CommentController::class, 'deletarComentario']);
Route::put('postagem/{id}/comentario/{id_comentario}', [CommentController::class, 'editarComentario']);
Route::get('postagem/{id}/comentario/{id_comentario}', [CommentController::class, 'verComentario']);

Route::post('criarSubReddit', [SubRedditController::class, 'criar']);
Route::post('linkar', [RedditController::class, 'linkar']);






