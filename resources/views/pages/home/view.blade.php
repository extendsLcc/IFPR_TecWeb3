@extends( 'layouts.default' )


@section( 'title', 'Home' )

@section( 'content' )

    <div class="container my-5">
        <!--Section: Content-->
        <section class="col-12">
            <!-- Jumbotron -->
            <div id="intro" class="p-4 text-center bg-primary border-secondary shadow-5 rounded mb-5">
                <h1 class="mb-3 h2 text-white">TecWeb 3 - TADS</h1>
                <div class="mb-3 text-white">
                    <span>Frameworks:</span>
                    <div class="flex justify-center">
                        <ul class="ml-10 list-disc text-justify">
                            <li>
                                <a class="link" href="https://laravel.com/">Laravel</a>
                            </li>
                            <li>
                                <a class="link" href="https://mdbootstrap.com/">MDBootstrap</a>
                            </li>
                            <li>
                                <a class="link" href="https://tailwindcss.com/">Tailwindcss</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
                <p class="mt-3 mb-2 text-sm">
                    Projeto Desenvolvido para disciplina TecWeb3 para aprendizado do framework laravel.
                    <br>
                    ~ Lucas LCC
                </p>
                <a target="_blank" href="https://github.com/extendsLcc/TecWeb3_Controle-de-Series"
                   class="btn btn-dark text-white" rel="nofollow"
                >
                    <i class="fab fa-github"></i>
                    <span>Github</span>
                </a>
            </div>
            <!-- Jumbotron -->
        </section>
        <!--Section: Content-->
    </div>

@endsection
