@extends('layouts.submenu')

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
<div class="panel-body ">
    <!--<h1>Calificación de {{ $user->first_name }} {{ $user->last_name }}</h1>-->
    <h2>Calificación</h2>
    <span>
        <!--{{ round($punctuations->avg('punctuation'), 2) }}-->

        <span class="ratingAverage" data-average="{{ round($punctuations->avg('punctuation'), 2) }}"></span>
        <span class="article" data-id="{{ $user->id }}"></span>
        <div class="barra">
            <span class="bg"></span>
            <span class="stars">
                @for($i=1; $i <=5; $i++)
                <span class="star" data-vote="{{ $i }}">
                    <span class="starAbsolute"></span>
                </span>
                @endfor
            </span>
        </div>
    </span>
</div>

<div class="panel-body">
    <h2>Lo que dicen los usuarios</h2>
    <ul>
        @foreach ($punctuations as $punct)
        <li>{{ $punct->comment }}</li>
        @endforeach
    </ul>
</div>
@endsection