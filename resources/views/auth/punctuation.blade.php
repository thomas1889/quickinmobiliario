@extends('layouts.submenu')
@section('image')
<img src="{{ route('get_perfil_image_path', $user->id) }}" class="col-xs-12 img-circle">
@endsection
<!--SECTION-->
@section('style_punctuation')

<i class="text-uppercase">
    @endsection
    @section('end_style_punctuation')
</i>

@endsection
<!--END SECTION-->
@section('submenu')
<div class="panel-body">

</div>
<div class="panel-body">
    Punctuation
</div>

@endsection