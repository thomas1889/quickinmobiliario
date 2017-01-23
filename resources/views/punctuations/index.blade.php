@extends('layouts.submenu')

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
    <!--    <h1>{{ $user->first_name }} {{ $user->last_name }}</h1>
        <h2>Calificación</h2>
        <span>
            {{ round($punctuations->avg('punctuation'), 2) }}
        </span>
        <h2>Lo que dicen los usuarios</h2>
        <ul>
            @foreach ($punctuations as $punct)
            <li>{{ $punct->comment }}</li>
            @endforeach
        </ul>-->

    <!-- Start page content -->
    <section id="page-content" class="page-wrapper">

        <!-- AGENTS DETAILS ABOUT START -->
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="agent-details-desc-info">
                            <div class="agent-details-name">
                                <h3>{{ $user->first_name }} {{ $user->last_name }}</h3>
                                <span>
                                    {{ round($punctuations->avg('punctuation'), 2) }}
                                </span>  
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- AGENTS DETAILS ABOUT END -->

        <!-- EXPERIENCE INQUIRY AREA START -->
        <div class="experience-inquiry-area pb-115">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="experience">
                            <h5>Comments</h5>
                            @foreach ($punctuations as $punct)
                            <p> <i class="fa fa-hand-o-right fa-1x" aria-hidden="true"></i> {{ $punct->comment }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- EXPERIENCE INQUIRY AREA END -->
    </section>
</div>

@endsection