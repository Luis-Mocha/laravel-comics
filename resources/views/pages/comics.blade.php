@extends( 'layout.app' )

@section ('title-page')
DC-Comics | Comics
@endsection

@section( 'content-main' )

    <div id="comics-main" class="container">
        @foreach( $comics as $elem )
            
        <div class="comic-card">
            <!-- <img src=" {{ $elem['thumb'] }} " alt="Thumb">  -->
            <!-- il link pe la thumb non funziona-->

            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">

            <div class="cardTitle">{{$elem['title']}}</div>
        </div>

        @endforeach
    </div>

@endsection