@extends('layouts.app')

@section('content')
  <!--<h1>Listado de Inmuebles <a href="{{ route('property_create_path') }}" class="btn btn-success">Nuevo Inmueble</a> <small><a href="/" class="btn btn-link pull-right"><< Regresar</a></small></h1>

  <div class="row">
    <div class="col-md-12">
      <div class="well well-lg">
        <!--<propertysearch></propertysearch>
        <form class="form form-inline" action="{{ route('property_filter_path') }}" method="get">
          <div class="form-group">
            <select class="form-control" name="city">
              <option value="-1">Ciudad</option>
              <option value="Gerholdport">Gerholdport</option>
              <option value="Leonieview">Leonieview</option>
              <option value="Uptonstad">Uptonstad</option>
              <option value="East Terryville">East Terryville</option>
              <option value="Haneview">Haneview</option>
              <option value="New Devon">New Devon</option>
              <option value="West Laishamouth">West Laishamouth</option>
              <option value="Maggioville">Maggioville</option>
              <option value="New Waldo">New Waldo</option>
              <option value="Ziemefurt">Ziemefurt</option>
            </select>
          </div>
          <div class="form-group">
            <input type="number" min="0" step="1" class="form-control" name="rooms" placeholder="Habitaciones">
          </div>
          <div class="form-group">
            <input type="number" min="0" step="1" class="form-control" name="bathrooms" placeholder="Baños">
          </div>
          <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
      </div>
    </div>
  </div>

  <div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Inmueble</th>
          <th>Precio</th>
          <th>Área</th>
          <th>Ciudad</th>
          <th>Creado</th>
          <th style="width:13%">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($properties as $property)
          <tr>
            <td>{{ $property->id }}</td>
            <td>{{ $property->name }}</td>
            <td>{{ $property->price }}</td>
            <td>{{ $property->full_area }}</td>
            <td>{{ $property->city }}</td>
            <td>{{ $property->created_at }}</td>
            <td id="property-actions">
              <a href="{{ route('property_show_path', $property->id) }}" class="btn btn-success"><span class="glyphicon glyphicon-eye-open"></span></a>
              <a href="{{ route('property_edit_path', $property->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
              <a href="#" class="btn btn-danger" v-on:click.prevent="deleteProperty($event)">
                <span class="glyphicon glyphicon-trash"></span>
                <form class="hidden" action="{{ route('property_delete_path', $property->id) }}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                </form>
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <!-- Paginación
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {{ $properties->links() }}
    </div>
  </div>-->

  <!-- BREADCRUMBS AREA START -->
  <div class="breadcrumbs-area bread-bg-1 bg-opacity-black-70">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="breadcrumbs">
            <h2 class="breadcrumbs-title">Inmuebles</h2>
            <ul class="breadcrumbs-list">
              <li><a href="{{ url('/') }}">Inicio</a></li>
              <li>Inmuebles</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- BREADCRUMBS AREA END -->

  <!-- Start page content -->
  <section id="page-content" class="page-wrapper">
    <propertysearch uses="{{ $property_types }}"></propertysearch>

    <!-- NEWSLETTER AREA START -->
    @include('partials._newsletter')
    <!-- NEWSLETTER AREA END -->
  </section>

@stop
