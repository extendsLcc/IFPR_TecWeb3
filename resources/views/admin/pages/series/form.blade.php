@extends( 'admin.layouts.models.form' )

@section('title', 'Cadastro de Série')

@push('breadcrumb-items')
    <li class="breadcrumb-item"><a href="/series">Séries</a></li>
    <li class="breadcrumb-item active">Cadastro</li>
@endpush

@section('form-title', 'Cadastro de Série')

@section('toolbar-buttons')
    <a href="{{ route('series.list') }}" class="btn btn-md btn-outline-elegant">
        <i class="fas fa-arrow-left"></i>
        <span>Voltar</span>
    </a>
@endsection

@section('form-body')

    <form method="POST">
        @csrf

        <div class="form-group">
            <label for="nome-serie">Nome</label>
            <input type="text" class="form-control" id="nome-serie" name="nome" aria-describedby="text"
                   placeholder="Nome da Série">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
