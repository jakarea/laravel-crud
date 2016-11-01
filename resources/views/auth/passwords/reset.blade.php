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
             <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                        {{ csrf_field() }}
                <fieldset>
                <div class="input-prepend" title="Username">
                    <span class="add-on"><i class="halflings-icon envelope"></i></span>
                    <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>
                </div>
                <div class="clearfix"></div>
                
                <div class="input-prepend" title="Password">
                    <span class="add-on"><i class="halflings-icon lock"></i></span>
                    <input id="password" type="password" class="form-control" name="password" required>
                </div>
                <div class="clearfix"></div>
                
                <div class="input-prepend" title="Password">
                    <span class="add-on"><i class="halflings-icon lock"></i></span>
                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                </div>
                <div class="clearfix"></div>

                <div class="button-login">  
                    <button type="submit" class="btn btn-primary">Reset Password</button>
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
        <!--/span-->
    </div>
    <!--/row-->
</div>
<!--/.fluid-container-->
@endsection

