@extends('layouts.submenu')
@section('image')
<img src="{{ route('get_perfil_image_path', $user->id) }}" class="col-xs-12 img-circle">
@endsection
<!--SECTION-->
@section('style_perfil')

<i class="text-uppercase">
        @endsection
        @section('end_style_perfil')
    </i>

@endsection
<!--END SECTION-->
@section('submenu')
<div class="panel-body">

</div>
<div class="panel-body">
    <form class="form-horizontal" role="form" method="POST" action="{{ route('user_update_path') }}"enctype="multipart/form-data" >
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
            <label for="username" class="col-md-4 control-label">Username</label>
            <div class="col-md-6">
                <input id="username" type="text" class="form-control" name="username" value="{{ $user->username }}" required readonly>
                @if ($errors->has('username'))
                <span class="help-block">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div  class="form-group{{ $errors->has('document') ? ' has-error' : '' }}">
            <label for="document" class="col-md-4 control-label">Document</label>
            <div class="col-md-6">
                <input id="document" type="text" class="form-control" name="document" value="{{ $user->document }}" required   readonly>
                @if ($errors->has('document'))
                <span class="help-block">
                    <strong>{{ $errors->first('document') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <!--Date Natural Person-->
        @if ($user->user_type_id == 1)
        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
            <label for="first_name" class="col-md-4 control-label">Name</label>
            <div class="col-md-6">
                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ $user->first_name}}" required  autofocus>
                @if ($errors->has('first_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('first_name') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <!--END Dates Natural Person-->
        @else
        <!--Dates Legal Person-->
        <div  class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label for="image" class="col-md-4 control-label">Picture Perfil</label>
            <div class="col-md-6">
                <input id="image" type="file" accept="image/*" class="form-control" name="image" accept="image" value="{{ $user->image_perfil }}" autofocus>
                @if ($errors->has('image'))
                <span class="help-block">
                    <strong>{{ $errors->first('image') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div  class="form-group{{ $errors->has('business_name') ? ' has-error' : '' }}">
            <label for="business_name" class="col-md-4 control-label">Business Name</label>
            <div class="col-md-6">
                <input id="business_name" type="text" class="form-control" name="business_name" value="{{ $user->business_name }}" required autofocus>
                @if ($errors->has('business_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('business_name') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <!--END Dates Legal Person-->
        @endif

        <!--DATOS DE PERFIL DE USUARIO-->
        <div class="form-group{{ $errors->has('cell_phone') ? ' has-error' : '' }}">
            <label for="cell_phone" class="col-md-4 control-label">Cell Phone</label>
            <div class="col-md-6">
                <input id="cell_phone" type="text" class="form-control" name="cell_phone" value="{{ $user->cell_phone }}" >
                @if ($errors->has('cell_phone'))
                <span class="help-block">
                    <strong>{{ $errors->first('cell_phone') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
            <label for="address" class="col-md-4 control-label">Address</label>
            <div class="col-md-6">
                <input id="address" type="text" class="form-control" name="address" value="{{ $user->address }}" >
                @if ($errors->has('address'))
                <span class="help-block">
                    <strong>{{ $errors->first('address') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
            <label for="age" class="col-md-4 control-label">Age</label>
            <div class="col-md-6">
                <input id="age" type="number" class="form-control" name="age" value="{{ $user->age }}" >
                @if ($errors->has('age'))
                <span class="help-block">
                    <strong>{{ $errors->first('age') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
            <label for="gender" class="col-md-4 control-label">Gender</label>
            <div class="col-md-6">
                <select id="gender"  class="form-control" name="gender" >
                    @if ($user->gender == "")
                    <option value="Mujer">Mujer</option>
                    <option value="Hombre">Hombre</option>
                    @else
                    @if ($user->gender == "Hombre")
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                    @else
                    <option value="Mujer">Mujer</option>
                    <option value="Hombre">Hombre</option>
                    @endif
                    @endif
                </select>
            </div>
        </div>
        <div class="form-group{{ $errors->has('profession') ? ' has-error' : '' }}">
            <label for="profession" class="col-md-4 control-label">Profession</label>
            <div class="col-md-6">
                <input id="profession" type="text" class="form-control" name="profession" value="{{ $user->profession }}" >
                @if ($errors->has('profession'))
                <span class="help-block">
                    <strong>{{ $errors->first('profession') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
            <label for="city" class="col-md-4 control-label">City</label>
            <div class="col-md-6">
                <input id="city" type="text" class="form-control" name="city" value="{{ $user->city }}" >
                @if ($errors->has('city'))
                <span class="help-block">
                    <strong>{{ $errors->first('city') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('newsletter') ? ' has-error' : '' }}">
            <label for="newsletter" class="col-md-4 control-label">Newsletter</label>
            <div class="col-md-6">
                <select id="newsletter"  class="form-control" name="newsletter"  >
                    @if ($user->newsletter == "")
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                    @else
                    @if ($user->newsletter == "Si")
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                    @else
                    <option value="No">No</option>
                    <option value="Si">Si</option>
                    @endif
                    @endif
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button  type="submit" class="btn btn-primary">
                    Save Changes
                </button>
            </div>
        </div>
    </form>
</div>

@endsection