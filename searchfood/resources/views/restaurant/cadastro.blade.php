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
        <link rel="stylesheet" href="{{asset('css/restaurante-cadastro.css')}}">

        <!-- Jquery and Bootstrap JS Script files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        
        <!--fa fa-icons-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <style>
        .container-fluid{background:url('{{asset('img/bg/bg-cadastro-2.jpg')}}')no-repeat center;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover}
    </style>
    <body>
        @include('templates.navbar')

        <div style="margin-bottom: 55%" class="container-fluid pt-4">
            <h1 class="text-center pt-5 text-white">
                Faça parte do Search Food e
                <p>aumente <span id="writer"></span></p>
            </h1>
        </div>
        <div id="container" class="container mb-4">
            <div class="card mx-5">
                <div class="card-body">
                    <form id="form-cadastro" action="" method="post">
                        <div style="display: block" id="owner">
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
                        <div style="display: none" id="restaurant">
                            <h3 class="text-center mt-5 mb-5">Dados do Restaurante</h3>
                            <div class="form-group">
                                <label for="restaurant_name">Nome</label>
                                <input type="text" name="restaurant_name" id="restaurant_name" class="form-control" placeholder="Nome do Restaurante">
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label for="cnpj">CNPJ</label>
                                    <input type="text" name="cnpj" id="cnpj" class="form-control" placeholder="CNPJ do Restaurante">
                                </div>
                                <div class="col">
                                    <label for="restaurant_phone">Telefone</label>
                                    <input type="text" name="restaurant_phone" id="restaurant_phone" class="form-control" placeholder="Telefone do Restaurante">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label for="address">Endereço</label>
                                    <input type="text" name="address" id="address" class="form-control" placeholder="Endereço do Restaurante">
                                </div>
                                <div class="col-3">
                                    <label for="neighborhood">Bairro</label>
                                    <input type="text" name="neighborhood" id="neighborhood" class="form-control" placeholder="Bairro">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-3">
                                    <label for="state">Estado</label>
                                    <select name="state" id="state" class="form-control">
                                        <option value="">Estado</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="city">Cidade</label>
                                    <select name="city" id="city" class="form-control">
                                        <option value="">Cidade</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label for="cep">CEP</label>
                                    <input type="text" name="cep" id="cep" class="form-control" placeholder="CEP">
                                </div>
                            </div>
                            <div class="form-group text-right">
                                <button type="button" class="btn btn-lg btn-secondary">Voltar</button>
                                <button type="button" class="btn btn-lg btn-danger">Continuar</button>
                            </div>
                        </div>
                        <div style="display: none" id="acesso">
                            <h3 class="text-center mt-5 mb-5">Dados de Acesso</h3>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="password">Senha</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Senha">
                            </div>
                            <div class="form-group">
                                <label for="c_password">Confirme a Senha</label>
                                <input type="password" name="c_password" id="c_password" class="form-control" placeholder="Confirme a Senha">
                            </div>
                            <div class="form-group text-right">
                                <button type="button" class="btn btn-lg btn-secondary">Voltar</button>
                                <button type="button" class="btn btn-lg btn-danger">Continuar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @include('templates.footer')

        <!--JS files-->
        <script src="{{asset('js/popper.js')}}"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script>
        <script src="{{asset('js/writer.js')}}"></script>
    </body>
</html>