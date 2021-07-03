@extends( 'layouts.default' )


@section( 'title', 'Dados do Produto' )

@section( 'content' )

    <h1 class="text-white">Página Categoria.SHOW</h1>
    
    <br>
    
    <p>
        O nome da categoria é {{ $category }}.
    </p>

@endsection
