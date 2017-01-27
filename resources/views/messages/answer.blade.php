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

    <div class="panel-body"><h2>Respuesta</h2></div>
    @foreach ($respons as $respon)
    <div class="panel col-md-12">
        <div class="panel-body ">
            <div class="panel panel-default col-md-12">
                <div class="panel-body  col-md-12">
                    <div class=" col-md-5"> 
                        {{ $respon->user->username }}
                    </div>
                </div>
                <div class="panel-body  col-md-12">
                    <div class="panel-footer col-md-12"> {{ $respon->message }}</div>
                </div>
            </div>
            <div class="contact-messge panel panel-default col-md-12 ">
                <!-- blog-details-reply -->
                <div class="leave-review">
                    <h5>Escriba su mensaje a continuación:</h5>
                    <form  id="contact-form" action="mail.php" method="post">

                        <input type="hidden" name="email" value="{{ $respon->email }}">
                        <input type="hidden" name="user_id" placeholder="{{ $user->id }}">
                        <input type="hidden" name="user_contacted_id" value="{{ $respon->user_id }}">
                        <textarea name="message" placeholder="Mensaje:"></textarea>
                        <button type="submit" class="submit-btn-1">Envíar</button>
                    </form>
                    <p class="form-messege mb-0"></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endsection