<link rel="stylesheet" href="<?php echo URL_BASE; ?>/assets/themes/css/Menu.css">
<script src="<?php echo URL_BASE; ?>/assets/themes/js/Menu.js"></script>
<div class="Menu">

    <nav class="d-none d-md-block navbar navbar-expand-lg navbar-dark">

        <div class="container">

            <a class="navbar-brand" href="#">
                <i class="fas fa-dollar"></i> DFM <sup style="position:absolute;top: 28px;">&nbsp;Softwares</sup>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#simulacao">Fazer Simulação</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sobre-nos">Sobre Nós</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-billing"></i>Planos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#como-funciona">Como Funciona</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Poítica de Privacidade</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contato">Entre em Contato</a>
                    </li>
                </ul>

            </div>

        </div>

    </nav>

    <nav class="d-block d-md-none">
        <input type="checkbox" id="menu-collapse">
        <label for="menu-collapse" id="hamburguer">
            <span class="hamburger"></span>
        </label>
        <div class="menu-mobile" onclick="$('#menu-collapse').click();">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a role="button" class="btn btn-outline-secondary" href="#simulacao">Fazer Simulação</a>
                </li>
                <li class="nav-item">
                    <a role="button" class="btn btn-outline-secondary" href="#sobre-nos">Sobre Nós</a>
                </li>
                <li class="nav-item">
                    <a role="button" class="btn btn-outline-secondary" href="#como-funciona">Como Funciona</a>
                </li>
                <li class="nav-item">
                    <a role="button" class="btn btn-outline-secondary" href="#">Poítica de Privacidade</a>
                </li>
                <li class="nav-item">
                    <a role="button" class="btn btn-outline-secondary" href="#contato">Entre em Contato</a>
                </li>
            </ul>

        </div>
    </nav>

</div>