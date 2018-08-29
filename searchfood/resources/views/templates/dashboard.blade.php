<!--CSS tamplate-->
<link rel="stylesheet" href="{{asset('css/dashboard-template.css')}}">

<!--Fonts-->
<link href="https://fonts.googleapis.com/css?family=Copse" rel="stylesheet">

<!--Estrutura do Template-->
<nav class="navbar navbar-dark bg-dark">
    <span class="navbar-brand mb-0 h1">
        <img height="55" src="{{asset('img/logo/logo.png')}}" alt="">
        <span id="logo-text">Search Food</span>
    </span>
    <ul class="nav justify-content-center">
        <h3 class="text-white">Nome do Restaurante</h3>
    </ul>
    <span class="navbar-text">
        <span class="mx-4 text-white">Status</span>
        <span class="mx-4 text-white">Relogio</span>
    </span>
</nav>
<nav class="navbar navbar-danger">
    <span></span>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link" href="#">DASHBOARD</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">PEDIDOS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">CARDÁPIO</a>
        </li>
        <li class="nav-item border">
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">ADMINISTRADOR</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">RELATÓRIOS</a>
        </li>
    </ul>
    <span></span>
</nav>