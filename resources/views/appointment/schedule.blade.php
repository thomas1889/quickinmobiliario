@extends('layouts.submenu')
<!--SECTION-->
@section('style_to_schedule')
<i class="text-uppercase">
    @endsection
    @section('end_style_to_schedule')
</i>
@endsection
<!--END SECTION-->

@section('submenu')
<div class="panel-body">

</div>
<div class="panel-body">
    <form class="form-horizontal" role="form" method="POST" action="{{ route('appointment_create_path') }}" >
        {{ csrf_field() }}

        <input id="image_perfil" type="hidden" name="image_perfil" value="quick.png">

        <div class="form-group{{ $errors->has('select') ? ' has-error' : '' }}">
            <label for="user_id"  class="col-md-4 control-label">Select</label>
            <div class="col-md-6">
                <select id="user_id"  class="form-control" name="user_id"  >
                    @foreach ($perfils as $perfil)
                    <option value="{{ $perfil->id }}">{{ $perfil->username }} </option>
                    @endforeach

                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button  type="submit" class="btn btn-primary">
                    Register
                </button>
            </div>
        </div>
    </form>
</div>

@endsection