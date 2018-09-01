<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contato</title>

        <!--Favicon-->
        <link rel="shortcut icon" href="{{asset('img/icon/SF.ico')}}" type="image/x-icon">

        <!--cdn Bootstrap CSS file-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!--CSS files-->
        <link rel="stylesheet" href="{{asset('css/contato.css')}}">

        <!-- Jquery and Bootstrap JS Script files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

        <!--fa fa-icons-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        @include('templates.navbar')

        <div style="margin-bottom: 40vh" class="container-fluid pt-5">
            <h1 class="text-center h2">
                Entrar em Contato
            </h1>
            <div class="container mt-5">
                <div id="div-form" class="card card-body mb-5">
                    <form action="" method="post" id="form-contato">
                        <div class="form-group">
                            <label for="name">Nome Completo</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Nome Completo">
                        </div>
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="name">Assunto</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Assunto">
                        </div>
                        <div class="form-group">
                            <label for="name">Mensagem</label>
                            <textarea name="" id="" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-lg btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
                <div id="div-contatos" class="text-center">
                    <p class="px-5">
                        Use o formulario para entrar em contato que 
                        retornaremos o mais breve possivel.
                    </p>
                    <br>
                    <p>
                        <i class="fa fa-phone"></i>
                        : contato
                    </p>
                    <p>
                        <i class="fa fa-phone"></i>
                        : contato
                    </p>
                    <p>
                        <i class="fa fa-phone"></i>
                        : contato
                    </p>
                </div>
            </div>
        </div>

        
    </body>
</html>