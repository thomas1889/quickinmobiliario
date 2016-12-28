@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h2>Por favor ingrese todos los datos para <br>registrar su <i>Proyecto</i>.</h2>
		@include('errors._validation_errors')
		<form id="form-create-project" class="form" action="{{ route('projects_create_path') }}" method="POST">
			{{ csrf_field() }}
			@include('partials._project_form')
		</form>
		<div class="form-group ">
			<button type="button" class="btn btn-primary" v-on:click="createProject">Guardar Cambios</button>
		</div>
	</div>
</div>
@stop
