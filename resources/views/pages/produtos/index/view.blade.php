@extends( 'layouts.default' )


@section( 'title', 'Listagem de Produtos' )

@section( 'content' )

    <div class="container">
        <div class="row mt-5 px-5">
            <div class="col-12">
                <div class="card border-default bg-primary">
                    <div class="card-header border-color-default d-flex justify-content-between align-items-center">
                        <span>Produtos - Listagem</span>
                        <div class="d-flex">
                            <div class="btn btn-dark">
                                <a href="{{ route('produtos.create') }}">Cadastrar</a>
                                <i class="fas fa-plus ms-2"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-white">

                        <table class="table table-striped table-hover">

                            <thead>
                                <tr class="text-white">
                                    <th>Produto</th>
                                    <th>Descrição</th>
                                    <th>Preço</th>
                                    <th>Estoque</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>

                            @foreach($products as $product)
                                <tr class="text-white">
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <td>
                                        <a href="{{ route('produtos.show', ['produto' => $product->id]) }}" class="btn btn-dark btn-sm px-2">
                                            <i class="fas fa-eye fa-lg"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                        </table>


                        {{ $products->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
