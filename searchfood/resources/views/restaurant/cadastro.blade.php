<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cadastrar Restaurante</title>

        <!--Favicon-->
        <link rel="shortcut icon" href="{{asset('img/icon/SF.ico')}}" type="image/x-icon">

        <!--cdn Bootstrap CSS file-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!--CSS files-->
        <link rel="stylesheet" href="{{asset('css/cadastro.css')}}">
        
        <!--CSS files-->
        <link rel="stylesheet" href="{{asset('css/restaurante-cadastro.css')}}">

        <!-- Jquery and Bootstrap JS Script files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    </head>
    <style>
        body{background:url('{{asset('img/bg/')}}')no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover}
    </style>
    <body>
        @include('templates.navbar')

        <div class="container">
            <h1 class="text-center mt-5">
                Faça parte do Search Food e
                <p>aumente <span id="writer"></span></p>
            </h1>
            <div style="" class="card mx-5">
                <div class="card-body">
                    <form id="form-cadastro" action="" method="post">
                        <div id="owner">
                            <h3 class="text-center mt-5 mb-5">Dados do Proprietário</h3>
                            <div class="form-group">
                                <label for="owner_name">Nome</label>
                                <input type="text" name="owner_name" id="owner_name" class="form-control" placeholder="Nome do Proprietário">
                            </div>
                            <div class="form-group">
                                <label for="cpf">CPF</label>
                                <input type="text" name="cpf" id="cpf" class="form-control" placeholder="CPF do Proprietário">
                            </div>
                            <div class="form-group">
                                <label for="owner_email">Email</label>
                                <input type="email" name="owner_email" id="owner_email" class="form-control" placeholder="Email do Proprietário">
                            </div>
                            <div class="form-group">
                                <label for="owner_phone">Telefone</label>
                                <input type="text" name="owner_phone" id="owner_phone" class="form-control" placeholder="Telefone do Proprietário">
                            </div>
                            <div class="form-group text-right">
                                <button type="button" class="btn btn-lg btn-danger">Continuar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--JS files-->
        <script src="{{asset('js/popper.js')}}"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script>
        <script src="{{asset('js/writer.js')}}"></script>
    </body>
</html>