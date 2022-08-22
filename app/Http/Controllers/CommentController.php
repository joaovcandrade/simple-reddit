<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class CommentController extends Controller
{
    public function criarComentario(Request $request, $id){

        $validated = Validator::make($request->all(),[
            'usuario' => ['required', 'max:30'],
            'comentario' => ['required', 'max:50'],
        ]);

        if(!$validated->fails()){

            $comment = new Comment;

            $comment->usuario = $request->usuario;
            $comment->comentario = $request->comentario;
            $comment->post_id = $id;
           
            $comment->save();


            return response()->json([
                "message" => "Comentario criado com sucesso"
            ], 201);

        }

        return response()->json([
            "message" => $validated->errors()->all()
        ], 500);


    }

    public function listarComentarios($id){
      /*comment::get()->toJson(JSON_PRETTY_PRINT);
        return response($students, 200); */
        return Comment::where('post_id', $id)->get();

   }

   public function editarComentario(Request $request, $id,  $id_comentario){
    if (Comment::where('id', $id_comentario)->exists()) {

        $comment = Comment::find($id_comentario);

        if(!($comment->post_id == $id)){
            return response()->json([
                "message" => "Comentario não encontrado na postagem"
            ], 404);
        }

        $comment->comentario = ($request->has('comentario')) ? $request->comentario : $comment->comentario;
        $comment->save();

        return response()->json([
            "message" => "Comentario atualizado com sucesso"
        ], 200);

        } else {
        return response()->json([
            "message" => "Comentario não encontrado"
        ], 404);
        
    }

 }


 public function deletarComentario(Request $request, $id, $id_comentario){
    if(Comment::where('id', $id_comentario)->exists()) {

        $comentario = Comment::find($id_comentario);

        if(!($comentario->post_id == $id)){
            return response()->json([
                "message" => "Comentario não encontrado na postagem"
            ], 404);
        }

        $comentario->delete();

        return response()->json([
          "message" => "Comentário deletado"
        ], 202);
      } else {
        return response()->json([
          "message" => "Comentário não encontrado"
        ], 404);
      }

 }


 public function verComentario(Request $request, $id, $id_comentario){
    if (Comment::where('id', $id_comentario)->exists()) {
        $comment = Comment::find($id_comentario);

        if(!($comment->post_id == $id)){
            return response()->json([
                "message" => "Comentario não encontrado na postagem"
            ], 404);
        }

        return response($comment, 200);
      } else {
        return response()->json([
          "message" => "Comentário não encontrado"
        ], 404);
      }
 }
}
