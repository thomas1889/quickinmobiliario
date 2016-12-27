@extends('layouts.app')

@section('content')
<h2>Por favor ingrese todos los datos para registrar su <i>Proyecto</i>.</h2>
<form class="form" action="">
	<div class="form-group">
		<label>Nombre Proyecto</label>
		<input type="text" name="form-control">
	</div>

	<div class="form-group" action="{{ route ('projects_create_path') }}" method="POST">
		{{ csrf_field() }}
		@include('partials._pro')
		<label>Ciudad</label>
		<select>
			<option>1 Bogotá</option>
			<option>2 Cota</option>
			<option>3 Chía</option>
			<option>4 Facatativá</option>
			<option>5 La Calera</option>
			<option>6 Mosquera</option>
		</select>
	</div>

	<div class="form-group">
		<label>Zona</label>
		<select>
			<option>1 Norte</option>
			<option>2 Centro</option>
			<option>3 Occidente</option>
			<option>4 Sur</option>
		</select>
	</div>

	<div class="form-group">
		<label>Barrio</label>
		<select>
			<option>1 A</option>
			<option>2 B</option>
			<option>3 C</option>
			<option>4 D</option>
		</select>
	</div>

	<div class="form-group">
		<label>Dirección</label>
		<input type="text" name="form-control">
	</div>
	<div class="form-group">
		<label>Teléfono</label>
		<input type="text" name="form-control">
	</div>
	<div class="form-group">
		<label>Área Construida</label>
		<input type="number" name="form-control">
	</div>
	<div class="form-group">
		<label>Área del Lote</label>
		<input type="number" name="form-control">
	</div>
	<button class="btn btn-primary">Enviar</button>
</form>
@stop
