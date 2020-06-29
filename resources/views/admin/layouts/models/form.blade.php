@extends( 'admin.layouts.models.default' )

@section('content')

    <div class="container">

        @include( 'admin.components.breadcrumb' )

        <div class="card">

            <div class="card-header d-flex flex-row align-items-center">

                <h5 class="h5 mb-0">
                    <i class="fas fa-clipboard-list"></i>
                    <span>@yield( 'form-title' )</span>
                </h5>

                <div class="toolbar-buttons ml-auto">
                    @yield('toolbar-buttons')
                </div>
            </div>

            <div class="card-body">

                @yield('form-body')

            </div>

        </div>

    </div>

@endsection
