@extends('login.layout.main')
@section('content')
    <div class="wrapper-page">
        @if (session('status_error'))
        <div class="alert alert-danger" role="alert" id="alerta">
            <center><span class="glyphicon glyphicon-lock"></span> &nbsp;{{ session('status_error') }}</center>
        </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger" role="alert" id="alerta">
            <center>
                @foreach ($errors->all() as $error)
                    <span class="glyphicon glyphicon-lock"></span> &nbsp;El campo reCAPTCHA es obligatorio
                @endforeach
            <center>
        </div>
        @endif
        <div class="card" >
            <div class="card-body">
                <div class="text-center">
                    <img src="{{ asset('img/logo_header_login.png') }}" height="100" width="auto">
                    <hr>
                </div>
                <form class="form-horizontal m-t-20" method="POST" action="ingresar">@csrf
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user-circle" aria-hidden="true"></i></span>
                                </div>
                                <input class="form-control" type="text" required="" placeholder="Usuario" name="usuario" autofocus="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key" aria-hidden="true"></i></span>
                                </div>
                                <input class="form-control" type="password" required="" placeholder="Contraseña" name="password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="g-recaptcha" data-sitekey="6Lefo8kUAAAAANnsSS5MfvDnzzniSQ0f3Nfc6U_A"></div>
                        </div>
                    </div>
                    <div class="form-group text-right m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-custom w-md waves-effect waves-light" type="submit">Ingresar
                            </button>
                        </div>
                    </div>
                    <div class="form-group row m-t-30" style="font-size: 12px;">
                        <div class="col-sm-12 text-center">
                            <a class="text-muted">Propiedad de Grupo IUSA, S.A. de C.V.</a>
                        </div>
                        <div class="col-sm-12 text-center">
                            <a class="text-muted">Versión 1.0</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection