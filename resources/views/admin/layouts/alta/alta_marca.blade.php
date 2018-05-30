@extends('admin.admin_panel')

@section('content')

<div class="card card-primary">
   <div class="card-header">
       <h3 class="card-title"><i class="fa fa-shopping-cart"></i> - Alta Marca</h3>
   </div>
    @if(session('status'))
        <div class="alert alert-success" style="margin-top: 20px;">
            {{ session('status') }}
        </div>
    @endif
    {!! Form::open(['url' =>'/alta_marca' , 'method' => 'POST']) !!}
   <div class="card-body">
        <div class="form-group">
            {{  Form::label('marca', null)}}
            <input type="text" name="marca" class="form-control {{ $errors->has('marca') ? ' is-invalid' : '' }}"  value="{{ old('marca') }}">
            @if($errors->has('marca'))
                <span class="invalid-feedback">
                    {{$errors->first('marca')}}
                </span>
            @endif
         </div>
       <div class="card-footer">
           <button type="submit" class="btn btn-primary">crear</button>
       </div>
    {!! Form::close() !!}
    </div>
</div>

@endsection
