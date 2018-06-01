@extends('admin.admin_panel')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"><i class="fa fa-shopping-cart"></i> - Alta Producto</h3>
        </div>
        @if(session('status'))
            <div class="alert alert-success" style="margin-top: 20px;">
                {{ session('status') }}
            </div>
        @endif
        {!! Form::open(['url' =>'/alta_producto' , 'method' => 'POST']) !!}
        <div class="card-body">
            <div class="form-group">
                {{ Form::label('Nombre') }}
                <input type="text" name="nombre" class="form-control">
            </div>
            <div class="form-group">
                {{  Form::label('marca')}}
                <select name="marca" class="form-control {{ $errors->has('marca') ? ' is-invalid' : '' }}" id="marca">
                    <option>Seleccionar...</option>
                    @foreach($marcas as $marca)
                        @if($marca->marca == old('marca'))
                            <option selected value="{{$marca->id}}">{{$marca->marca}}</option>
                        @else
                            <option value="{{ $marca->id }}">{{$marca->marca}}</option>
                        @endif
                    @endforeach
                </select>
                @if($errors->has('marca'))
                    <span class="invalid-feedback">
                    {{$errors->first('marca')}}
                </span>
                @endif
            </div>
            <div class="form-group">
                {{ Form::label('Modelo') }}
                <select name="" id="modelos" class="form-control">
                    <option>Seleccionar...</option>
                </select>
            </div>
            <div class="form-group">
                {{  Form::label('categoría')}}
                <select name="marca" class="form-control {{ $errors->has('categoria') ? ' is-invalid' : '' }}">
                    @foreach($categorias as $categoria)
                        @if($marca->marca == old('categoria'))
                            <option>{{$categoria->nombre}}</option>
                        @else
                            <option>{{$categoria->nombre}}</option>
                        @endif
                    @endforeach
                </select>
                @if($errors->has('marca'))
                    <span class="invalid-feedback">
                    {{$errors->first('categoria')}}
                </span>
                @endif
            </div>
            {{ Form::label('Descripción') }}
            <div class="form-group">
                <textarea class="form-control" rows="4" name="descripcion" style="resize: none;"></textarea>
            </div>
            {{ Form::label('Fotos producto') }}
             <div class="dropzone"></div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">crear</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.js"></script>
    <script src="/js/modelos.js"></script>
    <script>
        $('.textarea').ckeditor(); // if class is prefered.
    </script>
    <script>
        var myDropzone = new Dropzone('.dropzone', {
            url: '/admin/posts/hola/photos',
            paramName: 'photo',
            acceptedFiles: 'image/*',
            maxFilesize: 5,
            headers: {
                'X-CSRF-TOKEN': 'wWUPZhp0QvSigGH6rXN1Tz7jtTuy8rjx6r325erF'
            },
            dictDefaultMessage: 'Arrastra aquí tus fotos para subirlas'
        });
        myDropzone.on('error', function(file, res) {
            var msg = res.errors.photo[0];
            $('.dz-error-message:last > span').text(msg);
        });
        Dropzone.autoDiscover = false;
    </script>
@endsection