@if( session()->has( \App\Helpers\Toast::KEY_TYPE ) )
    @push('scripts')
        <script>
            @php
                $messageType = session()->get( \App\Helpers\Toast::KEY_TYPE );
                $messageText = session()->get(\App\Helpers\Toast::KEY_MESSAGE);
                $messageTitle = \App\Helpers\Toast::getMessageTitle( $messageType );
            @endphp
            tata.{{ $messageType }}( '{{ $messageTitle }}', '{{ $messageText }}' );
        </script>
    @endpush
@endif
