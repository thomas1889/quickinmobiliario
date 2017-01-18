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
                    <div class="col-md-6 col-xs-12">
                        <div class="registered-customers mb-50">
                            <h5 class="mb-50">LOGIN</h5>
                            <form action="#">
                                <div class="login-account p-30 box-shadow">
                                    <p>If you have an account with us, Please log in.</p>
                                    <input type="text" name="name" placeholder="Email Address">
                                    <input type="password" name="password" placeholder="Password">
                                    <p><small><a href="#">Forgot our password?</a></small></p>
                                    <button class="submit-btn-1" type="submit">login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- new-customers -->
                    <div class="col-md-6 col-xs-12">
                        <div class="new-customers mb-50">
                            <form action="#">
                                <h5 class="mb-50">REGISTER</h5>
                                <div class="login-account p-30 box-shadow">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text"  placeholder="First Name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text"  placeholder="last Name">
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="custom-select-2">
                                                <option value="defalt">country</option>
                                                <option value="c-1">Australia</option>
                                                <option value="c-2">Bangladesh</option>
                                                <option value="c-3">Unitd States</option>
                                                <option value="c-4">Unitd Kingdom</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="custom-select-2">
                                                <option value="defalt">State</option>
                                                <option value="c-1">Melbourne</option>
                                                <option value="c-2">Dhaka</option>
                                                <option value="c-3">New York</option>
                                                <option value="c-4">London</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="custom-select-2">
                                                <option value="defalt">Town/City</option>
                                                <option value="c-1">Victoria</option>
                                                <option value="c-2">Chittagong</option>
                                                <option value="c-3">Boston</option>
                                                <option value="c-4">Cambridge</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text"  placeholder="Phone here...">
                                        </div>
                                    </div>
                                    <input type="text"  placeholder="Company neme here...">
                                    <input type="text"  placeholder="Email address here...">
                                    <input type="password"  placeholder="Password">
                                    <input type="password"  placeholder="Confirm Password">
                                    <div class="checkbox">
                                        <label class="mr-10">
                                            <small>
                                                <input type="checkbox" name="signup">Sign up for our newsletter!
                                            </small>
                                        </label>
                                        <label>
                                            <small>
                                                <input type="checkbox" name="signup">Receive special offers from our partners!
                                            </small>
                                        </label>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-12">
                                            <button class="submit-btn-1 mt-20" type="submit" value="register">Register</button>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <button class="submit-btn-1 mt-20 f-right" type="reset">Clear</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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