@extends( 'layouts.default' )


@section( 'title', 'Cadastro de Produto' )

@section( 'content' )

    <div class="container">
        <div class="row mt-5 px-5">
            <div class="col-12">
                <div class="card border-default bg-primary">
                    <div class="card-header border-color-default d-flex justify-content-between align-items-center">
                        <span>Produtos - Cadastro</span>
                        <div class="d-flex">
                            <a class="btn btn-dark mt-2" href="{{ route('produtos.index') }}">
                                <i class="fas fa-undo me-2"></i>
                                <span>Voltar</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body text-white">

                        <form method="POST" action="{{ route('produtos.store') }}">
                        @csrf
                        <!-- Text input -->
                            <div class="form-outline form-white mb-4">
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    class="form-control"
                                    value="{{ old('name') }}"
                                />
                                <label class="form-label" for="name">Nome do Produto</label>
                                @error('name')
                                <div class="form-helper text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class=" mb-4">
                                <label class="form-label text-white" for="category_id">Categoria</label>

                                <mwc-select class="form-control p-0" name="category_id">
                                    @foreach( \App\Models\Category::all() as $category )
                                        <mwc-list-item value="{{ $category->id }}" selected>{{ $category->name }}</mwc-list-item>
                                    @endforeach
                                </mwc-select>

                                {{--<select class="form-select" name="category_id">
                                @foreach( \App\Models\Category::all() as $category )
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>--}}
                                @error('name')
                                <div class="form-helper text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Message input -->
                            <div class="form-outline form-white mb-4">
                                <textarea
                                    class="form-control"
                                    id="description"
                                    name="description"
                                    rows="4">{{ old('description') }}</textarea>
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
                                    value="{{ old('description') }}"
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
                                    value="{{ old('stock') }}"
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
