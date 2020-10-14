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
<body>

<!-- dark -->
<ul class="nav nav-tabs bg-dark">
  <li class="nav-item">
    <a class="nav-link active" href="#">Catálogo</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Novo</a>
  </li>
</ul>

<div class="container-fluid">

    <div class="row back">
        <div class="col-md-12 view">
        
        <div class="form-group">
            <h3><i class="fa fa-check-square-o"></i> Catálogo de Filmes</h3>
        </div>
        <form>
            <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                    <label for="filme" class="bmd-label-floating">Título do Filme</label>
                    <input type="text" class="form-control" id="filme" name="filme">
                    <span class="bmd-help">Informe o nome do filme!</span>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label for="classific" class="bmd-label-floating">Classificação Indicativa</label>
                    <select class="form-control" id="classific" id="classificacao" name="classificacao">
                        <option value="">Selecione...</option>
                        <option value="L">Livre</option>
                        <option value="10">Acima de 10 anos</option>
                        <option value="12">Acima de 12 anos</option>
                        <option value="14">Acima de 14 anos</option>
                        <option value="16">Acima de 16 anos</option>
                        <option value="18">Acima de 18 anos</option>
                    </select>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label>Atores</label>
                    <input type="text" class="form-control" multiple data-role="tagsinput" id="atores" name="atores">
                    <span class="text">* Separe o nome dos atores por virgula!</span>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label for="diretor" class="bmd-label-floating">Dirigido por</label>
                    <input type="text" class="form-control" id="diretor" name="diretor">
                    <span class="bmd-help">Informe o nome do Diretor!</span>
                </div>
                </div>
            </div>
            <hr>
            <div class="options right">
                <button type="submit" class="btn btn-primary btn-raised">Salvar</button>
            </div>
         </form>
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