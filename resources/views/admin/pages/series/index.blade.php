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

    <table id="list-table" class="table" width="100%">
        <thead>
        <tr>
            <th class="th-sm">
                Name
            </th>
            <th class="th-sm">
                Ações
            </th>
        </tr>
        </thead>
        <tbody>

        @foreach( $series as $serie )

            <tr>
                <td>{{ $serie->nome }}</td>
                <td style="width: 5%">
                    <a class="delete-serie" data-id="{{ $serie->id }}">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
            </tr>

        @endforeach

        </tbody>
    </table>

@endsection

@push('scripts')
    <script>
        $( document ).ready( function () {

            const tableElement = $( '#list-table' );

            // datatable
            tableElement.DataTable( {
                'pagingType': 'full_numbers',
            } );

            tableElement.on( 'click', '.delete-serie', ( event ) => {

                const { currentTarget } = event;
                const deleteButton = $( currentTarget );

                swal.fire( {
                    title: 'Você tem certeza que deseja excluir a série?',
                    text: 'Você não será capaz de reberter esta ação!',
                    icon: 'warning',
                    showCancelButton: true,
                    // confirmButtonColor: '#3085d6',
                    // cancelButtonColor: '#d33',
                    confirmButtonText: 'Sim, excluir!'
                } ).then( ( result ) => {

                    if (result.value) {

                        axios.delete( `/series/${ deleteButton.data( 'id' ) }` )
                            .then( () => {

                                swal.fire(
                                    'Excluido!',
                                    'A Série foi excluida com sucesso.',
                                    'success'
                                );

                                tableElement.DataTable()
                                    .row( deleteButton.closest( 'tr' ) )
                                    .remove()
                                    .draw();

                            } )
                            .catch( () => {

                                swal.fire( {
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Ocorreu um erro ao excluir a série!',
                                } )

                            } )

                    }
                } )

            } )

        } );
    </script>
@endpush
