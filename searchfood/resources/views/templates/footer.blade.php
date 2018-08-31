<!--CSS template-->
<link rel="stylesheet" href="{{asset('css/footer.css')}}">

<!--Footer-->
<footer style="font-size: 15px;" class="mt-4 bg-dark text-white">
    <nav id="template-navbar" class="navbar navbar-expand-lg navbar-light bg-dark mb-4">
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
    <!--Social buttons-->
    <div class="text-center">
        <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
                <a id="i" href="#" class="fa fa-facebook"></a>
            </li>
            <li class="list-inline-item">
                <a id="i" href="#" class="fa fa-twitter"></a>
            </li>
            <li class="list-inline-item">
                <a id="i" href="#" class="fa fa-google-plus"></a>
            </li>
            <li class="list-inline-item">
                <a id="i" href="#" class="fa fa-instagram"></a>
            </li>
            <li class="list-inline-item">
                <a id="i" href="#" class="fa fa-youtube-play"></a>
            </li>
        </ul>
    </div>
    <!--/.Social buttons-->

    <hr>

    <!--Copyright-->
    <div style="font-size: 16px" class="footer-copyright py-3 text-center">
        © 2018 Copyright:
        <a href="http://localhost:8000"> searchfood.com.br</a>
    </div>
    <!--/.Copyright-->
</footer>