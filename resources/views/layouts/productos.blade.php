
@extends('home')

@section('content')

    <style>.marcas{background-color: #2a6496; color: white; font-weight: bold; border: 2px solid black;}.marcas:hover{color:black; background-color: white; border: 2px solid black; font-weight: bold;}.modelos{color:black; background-color: white; border: 2px solid black;}</style>
        <div class="container">
            <div class="list-group menu col-md-2" style="margin-top:10px; margin-left: 5px;">
                <p class="list-group-item list-group-item-action" style="background: black; color:white; font-weight: bold; border: 2px solid black;">CÁTALOGO</p>
                @foreach($marcas as $marca)
                    <a href="/productos/{{ strtolower($marca->marca)}}"><li class="list-group-item list-group-item-action marcas">{{ strtoupper($marca->marca) }}</li></a>
                @endforeach
            </div>
            @yield('modelos')
        </div>

@endsection



