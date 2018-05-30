@extends('layouts.productos')

@section('modelos')
        <div class="col-md-3" style="margin-top: 15px;">
                <p class="list-group-item list-group-item-action" style="background: black; color:white; font-weight: bold; border: 2px solid black;"> {{ strtoupper($marca['marca'])}}</p>
        @foreach($modelos as $modelo)
                <a href="/productos/{{ $marca['marca'] }}/{{strtolower($modelo->slug)}}"><li class="list-group-item list-group-item-action marcas"> {{ $modelo->modelo }} </li></a>
        @endforeach
        </div>
    @yield('mostrar_productos')
@endsection