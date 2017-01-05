@extends('layouts.app')

@section('content')

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

@stop
