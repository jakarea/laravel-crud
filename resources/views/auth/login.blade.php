@extends('admin.layouts.auth')
@section('content')
<div class="container-fluid-full">
<div class="row-fluid">
    <div class="row-fluid">
        <div class="login-box">
            <div class="icons">
                <a href="{!! url('/') !!}"><i class="halflings-icon home"></i></a>
                <a href="{!! url('/register') !!}"><i class="halflings-icon cog"></i></a>
            </div>
            <h2>Login to your account</h2>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <fieldset>
                <div class="input-prepend" title="Username">
                    <span class="add-on"><i class="halflings-icon user"></i></span>
                    <input class="input-large span10" name="email" id="email" type="text" placeholder="Type email"/>
                    @if ($errors->has('email'))
                        <span class="help-block error">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="clearfix"></div>
                <div class="input-prepend" title="Password">
                    <span class="add-on"><i class="halflings-icon lock"></i></span>
                    <input class="input-large span10" name="password" id="password" type="password" placeholder="Type password"/>
                    @if ($errors->has('password'))
                        <span class="help-block error">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="clearfix"></div>
                <label class="remember" for="remember">
                <input type="checkbox" id="remember" name="remember" />Remember me</label>
                <div class="button-login">  
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
                <div class="clearfix"></div>
            </form>
            <hr>
            <h3>Forgot Password?</h3>
            <p>
                No problem, <a href="{{ url('/password/reset') }}">click here</a> to get a new password.
            </p>
        </div>
        <!--/span-->
    </div>
    <!--/row-->
</div>
<!--/.fluid-container-->
@endsection