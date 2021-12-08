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

                            @php
                                /** @var $products \App\Models\Product[] */
                            @endphp

                            @foreach($products as $product)
                                <tr class="text-white">
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->price_in_reais }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <td>
                                        <a
                                            href="{{ route('produtos.show', $product->id) }}"
                                            class="btn btn-dark btn-sm px-2"
                                            title="Visualizar Produto"
                                        >
                                            <i class="fas fa-eye fa-lg"></i>
                                        </a>
                                        <a
                                            href="{{ route('produtos.edit', $product->id) }}"
                                            class="btn btn-dark btn-sm px-2"
                                            title="Alterar Produto"
                                        >
                                            <i class="fas fa-edit fa-lg"></i>
                                        </a>
                                        <a
                                            href=""
                                            class="btn btn-dark btn-sm px-2"
                                            title="Excluir Produto"
                                        >
                                            <i class="fas fa-trash fa-lg"></i>
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
