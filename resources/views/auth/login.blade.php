@extends('layouts.app')

@section('content')
<!--<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Username</label>
                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
                                @if ($errors->has('username'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->

<!------------------------------------------------------------------------------------------------------------------- -->

<!-- Body main wrapper start -->
<div class="wrapper">
    <!-- Start page content -->
    <section id="page-content" class="page-wrapper">

        <!-- LOGIN SECTION START -->
        <div class="login-section pt-115 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="registered-customers mb-50">
                            <div class="panel-body">
                                <h5 class="mb-50">LOGIN</h5>
                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                    {{ csrf_field() }}
                                    <div class="login-account p-30 box-shadow">
                                        <p>If you have an account with us, Please log in.</p>

                                        <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="username" ></label>
                                            <div class="col-md-12">
                                                <input placeholder="Email" id="email" type="text"  name="email" value="{{ old('email') }}" required autofocus>
                                                @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password" ></label>
                                            <div class="col-md-12">
                                                <input placeholder="Password" id="password" type="password"  name="password" required>
                                                @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6 ">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="remember"> Remember Me
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-8 ">
                                                <button type="submit" class="submit-btn-1">
                                                    Login
                                                </button>
                                            </div>                                            
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-8 ">
                                                <p><a  href="{{ url('/password/reset') }}">  Forgot Your Password?</a></p>
                                            </div>                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- LOGIN SECTION END -->
    </section>
    <!-- End page content -->
</div>
<!-- Body main wrapper end -->
@endsection