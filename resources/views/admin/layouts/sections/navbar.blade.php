<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark elegant-color-dark lighten-1">

    <a class="navbar-brand" href="#">Controle de Séries</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
            aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item active">
                <a class="nav-link" href="#">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>

            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle" id="navbar-dropdown-series" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">Séries
                </a>

                <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbar-dropdown-series">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-align-justify"></i>
                        <span>Listar</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-plus"></i>
                        <span>Adicionar</span>
                    </a>
                </div>

            </li>

        </ul>

        <ul class="navbar-nav ml-auto nav-flex-icons">

            <li class="nav-item">
                <form class="form-inline">
                    <div class="md-form my-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    </div>
                </form>
            </li>

            <li class="nav-item d-flex align-items-center">
                <a class="nav-link waves-effect waves-light">1
                    <i class="fas fa-envelope"></i>
                </a>
            </li>

            <li class="nav-item avatar dropdown">

                <a class="nav-link dropdown-toggle" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('images/user/avatar/Unknown-person.jpg')  }}" class="rounded-circle z-depth-0"
                         alt="avatar image" style="height: 35px">
                </a>

                <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary" >

                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user-circle"></i>
                        <span>Perfil</span>
                    </a>

                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs"></i>
                        <span>Configurações</span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="#">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Deslogar</span>
                    </a>

                </div>

            </li>
        </ul>

    </div>
</nav>
<!--/.Navbar -->
