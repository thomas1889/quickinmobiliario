@extends('layouts.submenu')
@section('image')
<img src="{{ route('get_perfil_image_path', $user->id) }}" class="col-xs-12 img-circle">
@endsection
<!--SECTION-->
@section('style_punctuation')
<i class="text-uppercase">
    @endsection
    @section('end_style_punctuation')
</i>
@endsection
<!--END SECTION-->
@section('submenu')
<div class="panel-body">
</div>
<div class="panel-body">
    <h1>Calificación de {{ $user->first_name }} {{ $user->last_name }}</h1>
    <h2>Calificación</h2>
    <span>
        {{ round($punctuations->avg('punctuation'), 2) }}
    </span>
    <h2>Lo que dicen los usuarios</h2>
    <ul>
        @foreach ($punctuations as $punct)
        <li>{{ $punct->comment }}</li>
        @endforeach
    </ul>
</div>
@endsection