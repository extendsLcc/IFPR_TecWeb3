@extends( 'layouts.default' )


@section( 'title', 'Dados do Produto' )

@section( 'content' )

    <h1 class="text-white">Página Produtos.SHOW</h1>
    
    <br>
    
    <p>
        O produto é {{ $name }}, quantidade {{ $quantity }} e o preço é {{ $price }}
    </p>

@endsection
