@extends( 'layouts.main' )

@section( 'body' )
    
    <header>
        
        @section( 'header' )
            
            @include( 'sections.header.index' )
        
        @show
    
    </header>
    
    <main>
        
        @yield( 'content' )
    
    </main>
    
    <footer>
        
        @section( 'footer' )
            
            @include( 'sections.footer' )
        
        @show
    
    </footer>

@endsection
