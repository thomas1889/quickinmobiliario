@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h1 class="text-center">
			<a href="/projects" class="btn btn-info pull-left"> Volver</a>
		    Editar <i>Proyecto</i>.
			<a href="{{ route('projects_create_path') }}" class="btn btn-success pull-right">
				Publicar un Proyecto
			</a>
		</h1>
      @include('errors._validation_errors')

      <form class="form" action="{{ route('project_edit_path', $project->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        @include('partials._project_form')
      </form>
      <div class="form-group">
        <button type="button" class="btn btn-primary" id="btn-actualizar-proyecto">Actualizar Proyecto</button>
      </div>
    </div>
  </div>

@stop
