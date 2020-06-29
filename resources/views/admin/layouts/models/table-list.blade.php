@extends( 'admin.layouts.models.default' )

@section('content')

    <div class="container">

        @include( 'admin.components.breadcrumb' )

        @if( session('message') )

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span>{{ session('message')  }}</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        @endif

        <div class="card">

            <div class="card-header d-flex flex-row align-items-center">

                <h5 class="h5 mb-0">
                    <i class="fas fa-th-list"></i>
                    <span>@yield( 'list-title' )</span>
                </h5>

                <div class="toolbar-buttons ml-auto">
                    @yield('toolbar-buttons')
                </div>
            </div>

            <div class="card-body">

                @yield('table-body')

            </div>

        </div>

    </div>

@endsection
