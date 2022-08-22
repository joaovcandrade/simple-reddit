

      <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">

          <h3 class="mb-5"> Página da postagem </h3>

    
     <ul class="list-group">


   
    <div class="list-group">

    <div class="card">
  <div class="card-body">
    <h5 class="card-title">{{$post->titulo}}</h5>
    <p class="card-text">{{$post->postagem}}</p>
    <p class="card-text"><small class="text-muted">Ultima atualização: {{$post->updated_at}}</small></p>
  </div>
  @if($post->imagem != null)
  <img src="{{$post->imagem}}" class="card-img-bottom" alt="...">

  
  @endif

@if($post->video != null)
  <iframe width="560" height="315" src="{{$post->imagem}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  @endif

@if($post->link != null)

      <a href="{{$post->link}}" class="btn btn-primary stretched-link">LLink</a>
  @endif







</div>


    </div>


        

      </ul>


        @foreach ($comments as $comment)
    <div class="card mt-5">
    <div class="card-header">
      @ {{$comment->usuario}}
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0 fw-lighter fw-italic fs-6">
        <p>{{$comment->comentario}}</p>
      </blockquote>
    </div>

      <div class="card-footer text-muted">
   Ultima atualização: {{$comment->updated_at}}
  </div>


  </div>  
 @endforeach


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>