@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h1 class="text-center">
			<a href="{{ route('projects_path') }}" class="btn btn-info pull-left"> Volver</a>
		    Editar <i>Proyecto</i>.
			<a href="{{ route('projects_create_path') }}" class="btn btn-success pull-right">
				Publicar un Proyecto
			</a>
		</h1>
      @include('errors._validation_errors')

      <form class="form" id="form-edit-project" action="{{ route('project_edit_path', $project->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        @include('partials._project_form')
      </form>
      <uploadimages form="update-project-images" principal="form-edit-project" title="Imágenes del Proyecto" save="{{ route('project_image_upload_path') }}" delete="/imagen_proyecto" token="{{ csrf_token() }}"></uploadimages>
      <div class="form-group">
        <button type="button" class="btn btn-primary" v-on:click="updateProject">Actualizar Proyecto</button>
      </div>
    </div>
  </div>

@stop
