@extends( 'admin.layouts.models.table-list' )

@section('title', 'Lista de Séries')

@push('breadcrumb-items')
    <li class="breadcrumb-item"><a href="/series">Séries</a></li>
    <li class="breadcrumb-item active">Listagem</li>
@endpush

@section('list-title', 'Listagem de Séries')

@section('toolbar-buttons')
    <a href="{{ route('series.form.new') }}" class="btn btn-md btn-elegant">
        <i class="fas fa-plus mr-1"></i>
        <span>Adicionar</span>
    </a>
@endsection

@section('table-body')

    <table id="paginationFullNumbers" class="table" width="100%">
        <thead>
        <tr>
            <th class="th-sm">
                Name
            </th>
        </tr>
        </thead>
        <tbody>

            @foreach( $series as $serie )

                <tr>
                    <td>{{ $serie->nome }}</td>
                </tr>

            @endforeach

        </tbody>
    </table>

@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            //Pagination full Numbers
            $('#paginationFullNumbers').DataTable({
                "pagingType": "full_numbers"
            });
        });
    </script>
@endpush
