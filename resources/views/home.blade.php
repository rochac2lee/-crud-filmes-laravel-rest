<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catálogo de Filmes</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
    <!-- Código CSS criado para aplicação Chat -->
    
    <link rel="stylesheet" href="css/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/animate.css">
    
</head>
<body class="animated fadeIn">

<!-- dark -->
<ul class="nav nav-tabs bg-dark animated fadeInDown">
  <li class="nav-item">
    <a class="nav-link active" href="home">Catálogo</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="filmes">Novo</a>
  </li>
</ul>

<div class="container-fluid animated fadeInLeft">

    <div class="row back">
        <div class="col-md-12 view">
        
        <div class="form-group">
            <h3><i class="fa fa-check-square-o"></i> Adicionar Filme</h3>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Título</th>
                <th scope="col">Classificação</th>
                <th scope="col">Atores</th>
                <th scope="col">Diretor</th>
                <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>

            @foreach($filmes as $f)

                <tr>
                <th scope="row">{{ $filme =  $f -> id }}</th>
                <td>{{ $filme =  $f -> filme }}</td>
                <td>{{ $filme =  $f -> classificacao }}</td>
                <td>{{ $filme =  $f -> atores }}</td>
                <td>{{ $filme =  $f -> diretor }}</td>
                </tr>

            @endforeach 

            </tbody>
            </table>
        </div>
    </div>





</div>


</body>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
<script src="js/bootstrap-tagsinput.min.js"></script>

</html>