@extends('admin.admin_panel')

@section('content')

    <div class="card card-danger">
        <div class="card-header">
            <h3 class="card-title"><i class="fa fa-trash-o"></i> - Eliminar Marca</h3>
        </div>
        @if(session('status'))
            <div class="alert alert-success" style="margin-top: 20px;">
                {{ session('status') }}
            </div>
        @endif
        {!! Form::open(['url' =>'/borrar_marca' , 'method' => 'POST']) !!}
        <div class="card-body">
            <div class="form-group">
                {{  Form::label('marca')}}
                <select name="marca" class="form-control {{ $errors->has('marca') ? ' is-invalid' : '' }}">
                    @foreach($marcas as $marca)
                        @if($marca->marca == old('marca'))
                            <option selected>{{$marca->marca}}</option>
                        @else
                            <option>{{$marca->marca}}</option>
                        @endif
                    @endforeach
                </select>
                @if($errors->has('marca'))
                    <span class="invalid-feedback">
                    {{$errors->first('marca')}}
                </span>
                @endif
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">eliminar</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection