@extends('layouts.master')

@section('content')
    <!-- Lugares  -->
    <div>
        <h2> LUGARES A MOSTRAR </h2>
        <div>
        @foreach( $arrayLugares as $key => $lugar )
            <a href="{{ url('/lugares/show/' . $key) }}">
                <h4 class="contenedor" style="color:black;min-height:60px;">
                    {{ $lugar['nombre'] }}
                </h4>
            </a>

        </div>
        @endforeach

    </div>
@endsection
