@extends('layouts.app')

@section('content')
<div class="container">
    <div class="main row">
        <div class="col-xs-12 col-sm-3 ">
            <div class="container">
                <div class="panel-body col-xs-12">
                   @yield('image')
                </div>
            </div>
            <div class="container">
                MENU
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
