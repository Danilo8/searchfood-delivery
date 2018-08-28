<!--CSS do Template-->
<link rel="stylesheet" href="{{asset('css/navbar.css')}}">

<!--Fonts-->
<link href="https://fonts.googleapis.com/css?family=Copse" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

<!--Estrutura do Template-->
<nav id="template-navbar" class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="{{url('/')}}">
        <img height="55" src="{{asset('img/logo/logo.png')}}" alt="Logo">
        <span id="logo-text">Search Food</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <div class="dropdown nav-item">
                <span style="cursor: pointer" class="nav-link">
                    Sobre
                </span>                        
                <div class="dropdown-content text-center p-1">
                    <a class="dropdown-item" href="{{url('/sobre')}}">Sobre o Search Food</a>
                    <a class="dropdown-item" href="{{url('/termos')}}">Termos de Uso</a>
                    <a class="dropdown-item" href="{{url('/privacidade')}}">Privacidade</a>
                </div>
            </div>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{url('/contato')}}">Contato</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/entrar')}}">Entrar/Cadastrar</a>
            </li>
            <div id="donos-restaurante" class="dropdown nav-item">
                <span style="cursor: pointer" class="nav-link">
                    Donos de Restaurante
                </span>                        
                <div class="dropdown-content text-center p-1">
                    <a class="dropdown-item" href="{{url('/restaurante/cadastro')}}">Cadastrar Restaurante</a>
                    <a class="dropdown-item" href="{{url('/restaurante/login')}}">Acessar Painel</a>
                </div>
            </div>
        </ul>
    </div>
</nav>