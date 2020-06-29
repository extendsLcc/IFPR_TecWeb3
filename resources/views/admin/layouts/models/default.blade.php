@extends( 'admin.layouts.main' )

@section('body')

    <div class="h-100 d-flex flex-column">

        <header class="flex-grow-0">

            @include('admin.layouts.sections.navbar')

        </header>

        <main class="flex-fill pt-5" style="padding-bottom: 2rem">

            @yield( 'content' )

        </main>


        <footer class="flex-grow-0">

            @include('admin.layouts.sections.footer')

        </footer>

    </div>

@endsection
