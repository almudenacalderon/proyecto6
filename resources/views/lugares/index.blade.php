@extends('layouts.master')

@section('content')
    <!-- Lugares  -->
    <div>
        <h2 class="contenedor" style="color: black;"> LUGARES A MOSTRAR </h2>
        <br>
        <div>
        @foreach( $arrayLugares as $key => $lugar )
            <a href="{{ url('/lugares/show/' . $lugar['id']) }}">
                <h4 class="contenedor" style="color:black;min-height:60px;">
                    {{ $lugar['name'] }}
                </h4>
            </a>

        </div>
        @endforeach

    </div>
@endsection
