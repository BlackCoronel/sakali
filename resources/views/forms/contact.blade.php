@extends('home')

@section('content')

<div class="container">
    <section class="main-section contact" id="contacto">

        <div class="row">
            <div class="col-lg-6 col-sm-7 wow fadeInLeft">
                <div class="contact-info-box phone clearfix">
                    <h3><i class="fa-location-arrow"></i>@lang('validation.attributes.direccion'): </h3>
                    <span> VISERAS SAKALI, S.L. Polígono Industrial Oeste. Avenida de las Américas Parc. 5/14. 30169 Alcantarilla - Murcia. </span>
                </div>
                <div class="contact-info-box phone clearfix">
                    <h3><i class="fa-phone"></i>@lang('validation.attributes.telefono'):</h3>
                    <span>+34 968 80 87 54</span>
                </div>
                <div class="contact-info-box phone clearfix">
                    <h3><i class="fa fa-fax"></i>Fax:</h3>
                    <span>+34 968 80 87 54</span>
                </div>
                <div class="contact-info-box email clearfix">
                    <h3><i class="fa fa-envelope"></i>@lang('validation.attributes.correo'):</h3>
                    <span>info@sakali.com</span>
                </div>
                <div class="contact-info-box hours clearfix">
                    <h3><i class="fa-clock-o"></i>@lang('validation.attributes.horario'):</h3>
                    <span>@lang('validation.attributes.dias') : 8:30 am - 14:30 pm <br /> 16:00 pm - 19:00 pm</span>

                </div>
                <ul class="social-link">
                    <li class="twitter"><a href="https://twitter.com/Viseras_Sakali" target="_blank"><i class="fa-twitter"></i></a></li>
                    <li class="facebook"><a href="#" target="_blank"><i class="fa-facebook"></i></a></li>
                    <li class="gplus"><a href="https://plus.google.com/101587253726614371109?hl=es" target="_blank"><i class="fa-google-plus"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
                <div class="form">

                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>

                    {!! Form::open([ 'url' => '/contact' , 'method' => 'POST']) !!}

                    {{ Form::text('name', null ,['class' => 'form-control input-text' , 'placeholder' => trans('validation.attributes.campo_nombre')]) }}
                    {{ Form::email('email', null ,['class' => 'form-control input-text' , 'placeholder' => trans('validation.attributes.campo_email')]) }}
                    {{ Form::text('telephone', null, ['class' => 'form-control input-text', 'placeholder' => 'Teléfono de contacto']) }}
                    {{ Form::text('n_empresa', null, ['class' => 'form-control input-text', 'placeholder' => 'Nombre de la empresa']) }}
                    {{ Form::text('cargo', null, ['class' => 'form-control input-text', 'placeholder' => 'Cargo en la empresa']) }}
                    {{ Form::textarea('message', trans('validation.attributes.campo_cuerpo') ,['class' => 'form-control input-text text-area']) }}

                    <div class="text-center">
                        {{Form::submit('enviar', ['class'=>'input-btn'])}}
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </section>
</div>
@endsection