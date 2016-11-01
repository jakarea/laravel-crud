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
             <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}
                <fieldset>
                <div class="input-prepend" title="Username">
                    <span class="add-on"><i class="halflings-icon envelope"></i></span>
                    <input class="input-large span10" name="email" id="email" type="text" placeholder="Type email" required value="{!! old('email') !!}"/>
                    @if ($errors->has('email'))
                        <span class="help-block error">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="clearfix"></div>
                <div class="button-login">  
                    <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
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
