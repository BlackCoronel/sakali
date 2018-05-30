@extends('layouts.modelos')

@section('mostrar_productos')
    <div class="col-md-6" style="margin-top: 15px;">
        <h2 class="display-3">
            <img src="/{{ $marca['img_marca'] }}" title="{{$marca['marca']}}" width="128px"/>
        </h2>
        <ul class="nav nav-pills" style="margin-bottom: 30px;">
            @foreach($salida as $categ)
                <li class="nav-item">
                @if($categ == $salida[0])
                    <li class="active"><a data-toggle="pill" href="#{{str_replace(" ", "-",$categ)}}">{{$categ}}</a></li>
                @else
                    <li><a data-toggle="pill" href="#{{str_replace(" ", "-",$categ)}}">{{$categ}}</a></li>
                @endif
                </li>
            @endforeach
        </ul>
        <div class="tab-content">
            @foreach($salida  as $categ)
                @if($categ == $salida[0])
                    <div id="{{str_replace(" ", "-",$categ)}}" class="tab-pane fade in active">
                        <h3>{{ $categ }} {{ $modelo }}</h3>
                        @foreach($categorias as $cat)
                            @foreach($productos as $producto)
                                    <li>{{$producto->nombre}}</li>
                            @endforeach
                        @endforeach
                    </div>
                @else
                    <div id="{{str_replace(" ", "-",$categ)}}" class="tab-pane fade">
                        <h3>{{ $categ }} {{ $modelo }}</h3>
                        @foreach($categorias as $cat)
                            @foreach($productos as $producto)
                                @if(($producto->id_c) == $cat)
                                    <li>{{$producto->nombre}}</li>
                                @endif
                            @endforeach
                        @endforeach
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection