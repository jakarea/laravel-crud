@extends('admin.layouts.auth')
@section('content')
<div class="container-fluid-full">
<div class="row-fluid">
    <div class="row-fluid">
        <div class="login-box">
            <div class="icons">
                <a href="{!! url('/') !!}"><i class="halflings-icon home"></i></a>
                <a href="{!! url('/login') !!}"><i class="halflings-icon cog"></i></a>
            </div>
            <h2>Register new account</h2>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}
                <fieldset>
                <div class="input-prepend" title="Username">
                    <span class="add-on"><i class="halflings-icon user"></i></span>
                    <input class="input-large span10" id="name" type="text" name="name" value="{{ old('name') }}" required autofocus placeholder="Username">
                </div>

                <div class="clearfix"></div>
                <div class="input-prepend" title="Email">
                    <span class="add-on"><i class="halflings-icon envelope"></i></span>
                    <input class="input-large span10" name="email" id="email" type="email" placeholder="Type Email" value="{!! old('email') !!}" required/>
                </div>

                <div class="clearfix"></div>
                <div class="input-prepend" title="Password">
                    <span class="add-on"><i class="halflings-icon lock"></i></span>
                    <input class="input-large span10" name="password" id="password" type="password" placeholder="Type password" value="{!! old('password') !!}" required/>
                </div>

                <div class="clearfix"></div>
                <div class="input-prepend" title="Password">
                    <span class="add-on"><i class="halflings-icon lock"></i></span>
                    <input class="input-large span10" name="password_confirmation" id="password_confirmation" type="password" placeholder="Confirm password" value="{!! old('password_confirmation') !!}" required />
                </div>

                <div class="button-login">  
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                <div class="clearfix"></div>
            </form>
            <hr>
            <h3>Allready have account?</h3>
            <p>
                No problem, <a href="{{ url('/login') }}">click here</a> to login.
            </p>
        </div>
        <!--/span-->
    </div>
    <!--/row-->
</div>
<!--/.fluid-container-->
@endsection
