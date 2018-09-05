<!--CSS tamplate-->
<link rel="stylesheet" href="{{asset('css/dashboard-template.css')}}">

<!--Fonts-->
<link href="https://fonts.googleapis.com/css?family=Copse" rel="stylesheet">

<!--Estrutura do Template-->
<nav class="navbar navbar-dark bg-dark">
    <span class="navbar-brand mb-0 h1 mr-0">
        <img height="55" src="{{asset('img/logo/logo.png')}}" alt="">
        <span id="logo-text">Search Food</span>
    </span>
    <ul class="nav justify-content-center">
        <h3 class="text-white">Nome do Restaurante</h3>
    </ul>
    <ul class="nav justify-content-end">
        @include('templates.notificacoes')
        
        <span class="nav-item">
            <a href="{{ url('restaurant/logout') }}" class="nav-link">
                <span style="font-size: 18px" id="logout" class="mx-4">
                    Sair
                    <i class="fa fa-sign-out"></i>                
                </span>
            </a>
        </span>
    </ul>
</nav>
<nav class="navbar navbar-danger">
    <span></span>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            @if (explode('/', Request::url())[4] == 'dashboard')
                <a class="nav-link active" href="{{url('/restaurante/dashboard')}}">DASHBOARD</a>
            @else
                <a class="nav-link" href="{{url('/restaurante/dashboard')}}">DASHBOARD</a>
            @endif            
        </li>
        <li class="nav-item">
            @if (explode('/', Request::url())[4] == 'pedidos')
                <a class="nav-link active" href="{{url('/restaurante/pedidos')}}">PEDIDOS</a>
            @else
                <a class="nav-link" href="{{url('/restaurante/pedidos')}}">PEDIDOS</a>
            @endif
        </li>
        <li class="nav-item">
            @if (explode('/', Request::url())[4] == 'cardapio')
                 <a class="nav-link active" href="{{url('/restaurante/cardapio')}}">CARDÁPIO</a>
            @else
                 <a class="nav-link" href="{{url('/restaurante/cardapio')}}">CARDÁPIO</a>
            @endif           
        </li>
        <li class="nav-item border">
        </li>
        <li class="nav-item">
            @if (explode('/', Request::url())[4] == 'administrador')
                <a class="nav-link active" href="{{url('/restaurante/administrador')}}">ADMINISTRADOR</a>
            @else
                <a class="nav-link" href="{{url('/restaurante/administrador')}}">ADMINISTRADOR</a>
            @endif            
        </li>
        <li class="nav-item">
            @if (explode('/', Request::url())[4] == 'relatorios')
                <a class="nav-link active" href="{{url('/restaurante/relatorios')}}">RELATÓRIOS</a>
            @else
                <a class="nav-link" href="{{url('/restaurante/relatorios')}}">RELATÓRIOS</a>
            @endif            
        </li>
    </ul>
    <span></span>
</nav>