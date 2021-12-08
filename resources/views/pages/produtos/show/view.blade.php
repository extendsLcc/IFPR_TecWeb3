@extends( 'layouts.default' )


@section( 'title', 'Dados do Produto' )

@section( 'content' )

    @php
        /** @var $product \App\Models\Product */
    @endphp

    <div class="container">
        <div class="row mt-5 px-5">
            <div class="col-12">
                <div class="card border-default bg-primary">
                    <div class="card-header border-color-default d-flex justify-content-between align-items-center">
                        <span>Produto - {{ $product->name }}</span>
                    </div>
                    <div class="card-body text-white">

                        <div class="card-title">{{ $product->name }}</div>

                        <p class="card-text my-2">{{ $product->description }}</p>

                        <p class="text-muted">Preço: R$ {{ $product->price_in_reais }}</p>
                        <p class="text-muted">Estoque: <b>{{ $product->stock }}</b></p>

                        <hr class="border-color-default my-2">

                        <a class="btn btn-dark mt-2" href="{{ route('produtos.index') }}">
                            <i class="fas fa-undo me-2"></i>
                            <span>Voltar</span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
