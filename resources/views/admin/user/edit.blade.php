@extends('admin.layouts.master')
@section('title','Dashboard')
@section('content')
<div class="col-sm-12">
   @include('admin.partial.breadcumb')
   <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <p class="text-warning">{!! $user->email !!}</p>
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" value="{!! $user->name !!}">
                        </div>

                        <div class="form-group">
                            <label for="father">Father Name</label>
                            <input type="text" class="form-control" id="father" value="{!! $user->info['father'] !!}">
                        </div>

                        <div class="form-group">
                            <label for="mother">Mother Name</label>
                            <input type="text" class="form-control" id="mother" value="{!! $user->info['mother'] !!}">
                        </div>

                        <div class="form-group">
                            <label for="perm_add">Permanant Address</label>
                            <input type="text" class="form-control" id="perm_add" value="{!! $user->info['perm_add'] !!}">
                        </div>

                        <div class="form-group">
                            <label for="pres_add">Present Address</label>
                            <input type="text" class="form-control" id="pres_add" value="{!! $user->info['pres_add'] !!}">
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="confirm_password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Retype Password">
                        </div>
                        <button type="submit" class="btn btn-info">Submit</button>
                </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection