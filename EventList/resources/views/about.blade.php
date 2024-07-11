<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JavaScript do Bootstrap (opcional, mas necessário para alguns componentes) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh/jVsTGSlL3kMl7E5/6FLDkf8ksYfoRSJoRv" crossorigin="anonymous"></script>
 
    <title>Document</title>
</head>
<body>

<main>
    <div class="px-4 pt-5 my-5 text-center border-bottom">
    <h1 class="display-4 fw-bold text-body-emphasis">Meu nome é {{$nome}}</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Sou {{$profissao}}</p>
        <p class="lead mb-4">{{$descricao}}</p>
    </div>
    <div class="overflow-hidden" style="max-height: 30vh;">
      <div class="container px-5">
        <img src="imagemCaraDeTerno.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" loading="lazy">
      </div>
    </div>
  </div>
</main>

</body>
</html>
