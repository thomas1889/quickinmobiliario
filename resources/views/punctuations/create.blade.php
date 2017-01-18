@extends('layouts.app')

@section('content')

<h1>Calificar Usuario</h1>
<form class="form" action="{{ route('punctuation_create_path') }}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="user">Usuario</label>
        <select class="form-control" name="user">
            @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->username }} </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="punctuation">Calificación</label>
        <input type="number" min="1" max="5" step="1" name="punctuation" class="form-control" id="punctuation" placeholder="5">
    </div>
    <div class="form-group">
        <label for="comment">Comentarios</label>
        <textarea name="comment" class="form-control" rows="8" cols="80"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Calificar</button>
    </div>
</form>

@stop
