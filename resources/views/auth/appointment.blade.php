@extends('layouts.submenu')
@section('image')
<img src="{{ route('get_perfil_image_path', $user->id) }}" class="col-xs-12 img-circle">
@endsection
<!--SECTION-->
@section('style_appointment')

<i class="text-uppercase">
    @endsection
    @section('end_style_appointment')
</i>

@endsection
<!--END SECTION-->
@section('submenu')
<div class="panel-body">

</div>
<div class="panel-body">
    Schedule Appointment
</div>

@endsection