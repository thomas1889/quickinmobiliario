@extends('layouts.app')

@section('content')
<!--<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}" >
                        {{ csrf_field() }}

                        <input id="image_perfil" type="hidden" name="image_perfil" value="quick.png">
                        
                        <div class="form-group{{ $errors->has('select') ? ' has-error' : '' }}">
                            <label for="select" class="col-md-4 control-label">Select</label>
                            <div class="col-md-6">
                                <select id="select"  class="form-control" name="select"  >
                                    <option value="1">Natural Person</option>
                                    <option value="2">Legal Person</option>
                                </select>
                            </div>
                        </div>

                        Date Legal Person
                        <div id="date_legal">
                            <div  class="form-group{{ $errors->has('business_name') ? ' has-error' : '' }}">
                                <label for="business_name" class="col-md-4 control-label">Business Name</label>
                                <div class="col-md-6">
                                    <input id="business_name" type="text" class="form-control" name="business_name" value="{{ old('business_name') }}"  autofocus>
                                    @if ($errors->has('business_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('business_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        END Dates Legal Person
                        Dates Natural Person
                        <div id="date_natural">
                            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                <label for="first_name" class="col-md-4 control-label">Name</label>
                                <div class="col-md-6">
                                    <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required  autofocus>
                                    @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        END Dates Natural Person
                        <div class="form-group{{ $errors->has('document_type') ? ' has-error' : '' }}">
                            <label for="document_type" class="col-md-4 control-label">Document Type</label>
                            <div class="col-md-6">
                                <select id="document_type"  class="form-control" name="document_type"  >
                                    <option value="CC">Cedula Ciudadania</option>
                                    <option value="RUT">RUT</option>
                                    <option value="NIT">NIT</option>
                                </select>
                            </div>
                        </div>
                        <div  class="form-group{{ $errors->has('document') ? ' has-error' : '' }}">
                            <label for="document" class="col-md-4 control-label">Document</label>
                            <div class="col-md-6">
                                <input id="document" type="text" class="form-control" name="document" value="{{ old('business_name') }}" required   autofocus>
                                @if ($errors->has('document'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('document') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Username</label>
                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required>
                                @if ($errors->has('username'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button  type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->
<div class="wrapper">
    <!-- BREADCRUMBS AREA START -->
    <div class="breadcrumbs-area bread-bg-1 bg-opacity-black-70">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs">
                        <a href="{{ url('/login') }}"> <h2 class="breadcrumbs-title">Login</h2></a>
                        <ul class="breadcrumbs-list">
                            <li><a href="{{ url('/') }}">INICIO</a></li>
                            <li> <a href="{{ url('/login') }}">INICIAR SESIÒN</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMBS AREA END -->
    <!-- Start page content -->
    <section id="page-content" class="page-wrapper">
        <!-- LOGIN SECTION START -->
        <div class="login-section pt-115 pb-70">
            <div class="container">
                <div class="row">
                    <!-- new-customers -->
                    <div class="col-md-8 col-md-offset-2">
                        <div class="registered-customers mb-50">
                            <div class="panel-body">
                                <!--FORMULARIO-->
                                <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}" >
                                    {{ csrf_field() }}
                                    <h5 class="mb-50">REGISTRO</h5>
                                    <div class="login-account p-30 box-shadow">
                                        <div class="row">
                                            <div class="{{ $errors->has('select') ? ' has-error' : '' }}">
                                                <div class="col-sm-6">
                                                    <select id="select" class="custom-select-2" name="select"  >
                                                        <option value="1">Persona Natural</option>
                                                        <option value="2">Persona Juridica</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--Date Legal Person-->
                                            <div id="date_legal">
                                                <div  class="{{ $errors->has('business_name') ? ' has-error' : '' }}"> 
                                                    <div class="col-sm-6">
                                                        <input placeholder="Razon Social" id="business_name" type="text"  name="business_name" value="{{ old('business_name') }}"  autofocus>
                                                        @if ($errors->has('business_name'))
                                                        <span class="help-block">       
                                                            <strong>{{ $errors->first('business_name') }}</strong>
                                                        </span> 
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <!--END Dates Legal Person
                                                Dates Natural Person-->
                                            <div id="date_natural">
                                                <div class="{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                                    <div class="col-sm-6">
                                                        <input placeholder="Nombre" id="first_name" type="text"  name="first_name" value="{{ old('first_name') }}" required  autofocus>
                                                        @if ($errors->has('first_name'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('first_name') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <!--END Dates Natural Person-->
                                            <div class="{{ $errors->has('document_type') ? ' has-error' : '' }}">
                                                <div class="col-sm-6">
                                                    <select id="document_type"  class="custom-select-2" name="document_type"  >
                                                        <option value="CC">Cedula Ciudadania</option>
                                                        <option value="RUT">RUT</option>
                                                        <option value="NIT">NIT</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div  class="{{ $errors->has('document') ? ' has-error' : '' }}">
                                                <div class="col-sm-6">
                                                    <input placeholder="Documento" id="document" type="text"  name="document" value="{{ old('business_name') }}" required   autofocus>
                                                    @if ($errors->has('document'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('document') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <div class="col-sm-6">
                                                    <input placeholder="Email" id="email" type="email"  name="email" value="{{ old('email') }}" required>
                                                    @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="{{ $errors->has('username') ? ' has-error' : '' }}">
                                                <div class="col-sm-6">
                                                    <input id="username" type="text" placeholder="Nombre de Usuario" name="username" value="{{ old('username') }}" required>
                                                    @if ($errors->has('username'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('username') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <input id="password" type="password" placeholder="Contraseña" name="password" required>
                                            @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>                                            
                                        <input id="password-confirm" type="password" placeholder="Confirmar Contraseña" name="password_confirmation" required>

                                        <input id="image_perfil" type="hidden" name="image_perfil" value="quick.png">

                                        <div class="checkbox">
                                            <label class="mr-10">
                                                <small>
                                                    <input id="checkNews" name="checkNews" type="checkbox"  checked="checked" >Sign up for our newsletter!
                                                    
                                                    <input id="newsletter" type="hidden" name="newsletter" value="Si" >
                                                </small>
                                            </label>
                                        </div>
                                        <div class="row">
                                            <div  class="col-xs-12">
                                                  <button  class="boton-registro submit-btn-1 mt-20" type="submit" value="register">Register</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- LOGIN SECTION END -->
        <!-- SUBSCRIBE AREA END -->
    </section>
    <!-- End page content -->
</div>
@endsection