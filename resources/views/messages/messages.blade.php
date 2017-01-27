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
<div class="panel-body ">

    <span>
        <div class="panel-body"><h2>Mensajes</h2></div>

        @foreach ($messages as $messag)

        <div class="panel panel-default col-md-12">

            <div class="panel-body  col-md-12">
                <div class=" col-md-5"> 
                    {{ $messag->user->username }}

                </div>
                <div class=" col-md-3">
                    <a href="{{ route('get_answer_path',$messag->id) }}"><button type="submit" class="submit-btn-1" > Responder</button></a>
                </div>
                <div class=" col-md-4">
                    <a href="{{ route('appointment_create_path',$messag->user->id) }}"><button type="submit" class="submit-btn-1" > Agendar Cita</button></a>
                </div>
            </div>
            <div class="panel-body  col-md-12">
                <div class="panel-footer col-md-12"> {{ $messag->message }}</div>
            </div>
        </div>
        @endforeach
    </span>
</div>
@endsection