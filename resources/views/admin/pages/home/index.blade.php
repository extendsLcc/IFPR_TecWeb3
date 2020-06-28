@extends('admin.layouts.models.default')

@section('content')

        <main>

            <!--Main layout-->
            <div class="container">
                <!--First row-->
                <div class="row wow fadeIn" data-wow-delay="0.2s">
                    <div class="col-md-12">
                        <div class="jumbotron">
                            <h2 class="h2-responsive">Controle de Séries</h2>
                            <br>
                            <p>
                                Frameworks -
                                <a href="https://laravel.com/">Laravel</a> e
                                <a href="https://mdbootstrap.com/">Mdbootstrap</a>
                            </p>
                            <hr>
                            <p>
                                Projeto Desenvolvido para disciplina TecWeb3 para aprendizado do framework laravel.
                                <br><br>
                                ~ Lucas LCC
                            </p>
                            <a target="_blank" href="https://github.com/extendsLcc/TecWeb3_Controle-de-Series"
                               class="btn special-color-dark text-white" rel="nofollow">
                                <i class="fab fa-github"></i>
                                <span>Github</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!--/.First row-->

                <hr class="extra-margins">

                <!--Second row-->
                <div class="row">
                    <!--First columnn-->
                    <div class="col-lg-4">
                        <!--Card-->
                        <div class="card wow fadeIn" data-wow-delay="0.2s">

                            <!--Card image-->
                            <img class="img-fluid"
                                 src="https://via.placeholder.com/350x233"
                                 alt="Card image cap">

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title">This is title</h4>
                                <!--Text-->
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the card's
                                    content.</p>
                                <div class="text-center">
                                    <a href="#" class="btn special-color-dark text-white">Read more</a>
                                </div>
                            </div>

                        </div>
                        <!--/.Card-->
                    </div>
                    <!--First columnn-->

                    <!--Second columnn-->
                    <div class="col-lg-4">
                        <!--Card-->
                        <div class="card wow fadeIn" data-wow-delay="0.4s">

                            <!--Card image-->
                            <img class="img-fluid"
                                 src="https://via.placeholder.com/350x233"
                                 alt="Card image cap">

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title">This is title</h4>
                                <!--Text-->
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the card's
                                    content.</p>
                                <div class="text-center">
                                    <a href="#" class="btn special-color-dark text-white">Read more</a>
                                </div>
                            </div>

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Second columnn-->

                    <!--Third columnn-->
                    <div class="col-lg-4">
                        <!--Card-->
                        <div class="card wow fadeIn" data-wow-delay="0.6s">

                            <!--Card image-->
                            <img class="img-fluid"
                                 src="https://via.placeholder.com/350x233"
                                 alt="Card image cap">

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title">This is title</h4>
                                <!--Text-->
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the card's
                                    content.</p>
                                <div class="text-center">
                                    <a href="#" class="btn special-color-dark text-white">Read more</a>
                                </div>
                            </div>

                        </div>
                        <!--/.Card-->
                    </div>
                    <!--Third columnn-->
                </div>
                <!--/.Second row-->
            </div>
            <!--/.Main layout-->

        </main>

@endsection

@push('styles')
    <style>
        main {
            padding-top: 3rem;
            padding-bottom: 2rem;
        }

        .extra-margins {
            margin-top: 1rem;
            margin-bottom: 2.5rem;
        }

        .jumbotron {
            text-align: center;
        }
    </style>
@endpush
