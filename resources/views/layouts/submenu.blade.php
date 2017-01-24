@extends('layouts.app')
@section('content')
<div class="login-section pt-115 pb-70">
    <div class="container">
        <div class="main row">
            <div class="col-xs-12 col-sm-3 ">
                <div class="container">
                    <div class="panel-body col-sm-3 col-md-2">
                        <img src="{{ route('get_perfil_image_path', $user->id) }}" class="col-xs-12 img-circle">
                    </div>
                </div>
                <div class="col-sm-12 container panel">
                    @yield('style_perfil')
                    <div id="My_Perfil" class="panel panel-body col-sm-7 col-md-10">
                        <a  href="{{ route('profile_show_perfil',Auth::user()->username) }}">  Mi Perfil</a>
                    </div>
                    @yield('end_style_perfil')
                    @if ($user->user_type_id == 3 || $user->user_type_id == 2)
                    @yield('style_appointment')
                    <div id="Schedule"  class="panel panel-body col-sm-7 col-md-10">
                        <a href="{{ route('appointment_path',Auth::user()->id) }}">Citas</a>                    
                    </div>
                    @yield('end_style_appointment')
                    @yield('style_to_schedule')
                    <div id="Schedule"  class="panel panel-body col-sm-7 col-md-10">
                        <a href="{{ route('to_schedule_path',Auth::user()->id) }}">Mensajes</a>                    
                    </div>
                    @yield('end_style_to_schedule')
                    @yield('style_punctuation')
                    <div id="Schedule"  class="panel panel-body col-sm-7 col-md-10">
                        <a href="{{ route('user_punctuations_path',Auth::user()->id) }}">Puntuaciones</a>                    
                    </div>
                    @yield('end_style_punctuation')
                    @endif
                    @if ($user->newsletter =="Si")
                    @yield('style_letter')
                    <div  id="Neswletter" class="panel panel-body col-sm-7 col-md-10">
                        <a href="{{ route('newsletter_show',Auth::user()->username) }}"> Neswletter</a>
                    </div>
                    @yield('end_style_letter')
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-9">
                <div class="panel panel-default">
                    @yield('submenu')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection