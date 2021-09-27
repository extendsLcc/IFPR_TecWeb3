@extends( 'layouts.default' )


@section( 'title', 'Editar Produto' )

@section( 'content' )

    @php
        /** @var $product \App\Models\Product */
    @endphp

    <div class="container">
        <div class="row mt-5 px-5">
            <div class="col-12">
                <div class="card border-default bg-primary">
                    <div class="card-header border-color-default d-flex justify-content-between align-items-center">
                        <span>Produtos - Cadastro</span>
                    </div>
                    <div class="card-body text-white">

                        <form method="POST" action="{{ route('produtos.update', $product->id) }}">
                        @method('PUT')
                        @csrf
                        <!-- Text input -->
                            <div class="form-outline form-white mb-4">
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    class="form-control"
                                    value="{{ old('name', $product->name) }}"
                                />
                                <label class="form-label" for="name">Nome do Produto</label>
                                @error('name')
                                <div class="form-helper text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class=" mb-4">
                                <label class="form-label text-white" for="category_id">Categoria</label>
                                <select class="form-select" name="category_id">
                                    @foreach( \App\Models\Category::all() as $category )
                                        <option
                                            value="{{ $category->id }}"
                                            {{ $product->category->id === $category->id ? 'selected' : ''}}
                                        >{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="form-helper text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Message input -->
                            <div class="form-outline form-white mb-4">
                                <textarea
                                    class="form-control"
                                    id="description"
                                    name="description"
                                    rows="4">{{ old('description', $product->description) }}</textarea>
                                <label class="form-label" for="description">Descrição do produto</label>
                                @error('description')
                                <div class="form-helper text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-outline form-white mb-4">
                                <input
                                    type="number"
                                    id="price"
                                    name="price"
                                    class="form-control"
                                    value="{{ old('description', $product->price) }}"
                                />
                                <label class="form-label" for="price">Preço</label>
                                @error('price')
                                <div class="form-helper text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-outline form-white mb-4">
                                <input
                                    type="number"
                                    id="stock"
                                    name="stock"
                                    class="form-control"
                                    value="{{ old('stock', $product->stock) }}"
                                />
                                <label class="form-label" for="stock">Estoque</label>
                                @error('stock')
                                <div class="form-helper text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">Salvar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
