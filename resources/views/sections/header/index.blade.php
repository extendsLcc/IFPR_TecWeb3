<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="container-fluid">

        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#main-navbar"
            aria-controls="main-navbar"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>

        <a class="navbar-brand" href="/">TecWeb 3</a>

        <div class="collapse navbar-collapse" id="main-navbar">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active ripple ripple-surface-white" href="/">
                        <i class="fa fa-home"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle ripple ripple-surface-white"
                        id="nav-produto-dropdown"
                        role="button"
                        data-mdb-toggle="dropdown"
                        aria-expanded="false"
                    >
                        <i class="fas fa-box-open"></i>
                        <span>Produtos</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark border-default" aria-labelledby="nav-produto-dropdown">
                        <li>
                            <a class="dropdown-item ripple" href="#">
                                <i class="fas fa-align-justify"></i>
                                <span>Listar</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item ripple" href="#">
                                <i class="fas fa-plus"></i>
                                <span>Cadastrar</span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>

            <form class="d-flex input-group w-auto ">
                <input
                    type="search"
                    class="form-control rounded bg-primary"
                    placeholder="Search"
                    aria-label="Search"
                    aria-describedby="search-addon"
                />
                <span
                    class="input-group-text text-white border-0 ripple hover:opacity-75"
                    id="search-addon"
                    data-mdb-ripple-color="light"
                    data-mdb-ripple-centered="true"
                >
                  <i class="fas fa-search"></i>
                </span>
            </form>

            <ul class="navbar-nav nav-flex-icons">

                <li class="nav-item dropdown">

                    <a
                        class="nav-link dropdown-toggle hover:opacity-75"
                        aria-haspopup="true"
                        aria-expanded="false"
                        data-mdb-toggle="dropdown"
                        role="button"
                        id="nav-user-dropdown"
                    >
                        <i class="fas fa-user text-white"></i>
                    </a>


                    <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-lg-end border-default" aria-labelledby="nav-user-dropdown">
                        <li>
                            <a class="dropdown-item ripple" href="#">
                                <i class="fas fa-user-circle"></i>
                                <span>Perfil</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item ripple" href="#">
                                <i class="fas fa-cogs"></i>
                                <span>Configurações</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider border-secondary-light">
                        </li>
                        <li>
                            <a class="dropdown-item ripple" href="#">
                                <i class="fas fa-sign-out-alt"></i>
                                <span>Deslogar</span>
                            </a>
                        </li>

                    </ul>

                </li>
            </ul>

        </div>
    </div>
</nav>
