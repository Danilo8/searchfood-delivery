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
                @if (explode('/', Request::url())[3] == 'sobre' || explode('/', Request::url())[3] == 'termos' || explode('/', Request::url())[3] == 'privacidade')
                    <span style="cursor: pointer" class="nav-link active text-white">
                        Sobre
                    </span> 
                @else
                    <span style="cursor: pointer" class="nav-link">
                        Sobre
                    </span> 
                @endif                                       
                <div class="dropdown-content text-center p-1">
                    <a class="dropdown-item" href="{{url('/sobre')}}">Sobre o Search Food</a>
                    <a class="dropdown-item" href="{{url('/termos')}}">Termos de Uso</a>
                    <a class="dropdown-item" href="{{url('/privacidade')}}">Privacidade</a>
                </div>
            </div>
            <li class="nav-item">
                @if (explode('/', Request::url())[3] == 'contato')
                    <a class="nav-link text-white active" href="{{url('/contato')}}">Contato</a>
                @else
                    <a class="nav-link text-white" href="{{url('/contato')}}">Contato</a>
                @endif                
            </li>
            <li class="nav-item">
                @if (explode('/', Request::url())[3] == 'entrar')
                    <a class="nav-link active text-white" href="{{url('/entrar')}}">Entrar/Cadastrar</a>
                @else
                    <a class="nav-link" href="{{url('/entrar')}}">Entrar/Cadastrar</a>
                @endif
            </li>
            <div id="donos-restaurante" class="dropdown nav-item">
                @if (explode('/', Request::url())[3] == 'restaurante' || explode('/', Request::url())[3] == 'restaurante')
                    <span style="cursor: pointer" class="nav-link active text-white">
                        Donos de Restaurante
                    </span>  
                @else
                    <span style="cursor: pointer" class="nav-link">
                        Donos de Restaurante
                    </span>  
                @endif                                   
                <div class="dropdown-content text-center p-1">
                    <a class="dropdown-item" href="{{url('/restaurante/cadastro')}}">Cadastrar Restaurante</a>
                    <a class="dropdown-item" href="{{url('/restaurante/login')}}">Acessar Painel</a>
                </div>
            </div>
        </ul>
    </div>
</nav>