<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class PostController extends Controller
{
    public function criarPostagem(Request $request){

        $validated = Validator::make($request->all(),[
            'titulo' => ['required', 'max:30'],
            'postagem' => ['required', 'max:255'],
        ]);

        if(!$validated->fails()){

            $post = new Post;

            $post->titulo = $request->titulo;
            $post->postagem = $request->postagem;
            $post->imagem = $request->imagem;
            $post->video = $request->video;
            $post->link = $request->link;

            $post->sub_reddit_id = 1; #fixado para ter 1 subreddit

            $post->save();


            return response()->json([
                "message" => "Post criado com sucesso"
            ], 201);

        }

        return response()->json([
            "message" => $validated->errors()->all()
        ], 500);


    }

    public function listarPostagens(){
      /*Post::get()->toJson(JSON_PRETTY_PRINT);
        return response($students, 200); */
        return Post::all();

   }

   public function editarPostagem(Request $request, $id){
    if (Post::where('id', $id)->exists()) {

        $post = Post::find($id);

        $post->titulo = is_null($request->titulo) ? $post->titulo : $request->titulo;
        $post->postagem = is_null($request->postagem) ? $post->postagem : $request->postagem;

        $post->imagem = ($request->has('imagem')) ? $request->imagem : $post->imagem;
        $post->video = ($request->has('video')) ? $request->video : $post->video;
        $post->link = ($request->has('link')) ? $request->link : $post->link;
        $post->save();

        return response()->json([
            "message" => "Post atualizado com sucesso"
        ], 200);

        } else {
        return response()->json([
            "message" => "Post não encontrado"
        ], 404);
        
    }

 }


 public function deletarPostagem(Request $request, $id){
    if(Post::where('id', $id)->exists()) {
        $post = Post::find($id);
        $post->delete();

        return response()->json([
          "message" => "Post deletado"
        ], 202);
      } else {
        return response()->json([
          "message" => "post não encontrado"
        ], 404);
      }

 }


 public function verPOstagem(Request $request, $id){
    if (Post::where('id', $id)->exists()) {
        $post = Post::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
        return response($post, 200);
      } else {
        return response()->json([
          "message" => "Post não encontrado"
        ], 404);
      }
 }
}
