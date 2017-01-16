@extends('layouts.app')
@section('content')
<div class="container">
    <div class="main row">
        <div class="col-xs-12 col-sm-3 ">
            <div class="container">
                <div class="panel-body col-sm-3 col-md-2">
                    @yield('image')
                </div>
            </div>
            <div class="col-sm-12 container panel">
                @yield('style_perfil')
                <div id="My_Perfil" class="panel panel-body col-sm-7 col-md-10">
                    <a  href="{{ route('profile_show_perfil',Auth::user()->username) }}">  My Perfil</a>
                </div>
                @yield('end_style_perfil')
                @if ($user->user_type_id == 3 || $user->user_type_id == 2)
                @yield('style_appointment')
                <div id="Schedule"  class="panel panel-body col-sm-7 col-md-10">
                    <a href="{{ route('appointment_show',Auth::user()->username) }}">Appointment</a>                    
                </div>
                @yield('end_style_appointment')
                @yield('style_punctuation')
                <div id="Schedule"  class="panel panel-body col-sm-7 col-md-10">
                    <a href="{{ route('user_punctuations_path',Auth::user()->id) }}">Punctuation</a>                    
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
@endsection