@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1 class="text-center">
			<a href="{{ route('projects_path' )}}" class="btn btn-info pull-left"> Volver</a>
			<a href="{{ route('projects_create_path') }}" class="btn btn-success pull-right">
				Publicar un Proyecto
			</a>
			<br><br>
			Por favor ingrese todos los datos para <br>registrar su <i>Proyecto</i>.
		</h1><hr>
		@include('errors._validation_errors')
		<form id="form-create-project" class="form" action="{{ route('projects_create_path') }}" method="POST">
			{{ csrf_field() }}
			@include('partials._project_form')
		</form>
		<uploadimages form="my-awesome-dropzone" principal="form-create-project" title="Imágenes del Proyecto" save="{{ route('project_image_upload_path') }}" delete="/imagen_proyecto" token="{{ csrf_token() }}"></uploadimages>
		<div class="form-group ">
			<button type="button" class="btn btn-primary" v-on:click="createProject">Guardar Cambios</button>
		</div>
	</div>
</div>
@stop
