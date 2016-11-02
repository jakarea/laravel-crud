@extends('admin.layouts.master')
@section('title','Dashboard')
@section('content')
<div class="col-sm-12">
   @include('admin.partial.breadcumb')
   <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    Users Table
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-times"></a>
                     </span>
                </header>
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>1</td>
                            <td>{!! $user->name !!}</td>
                            <td>{!! $user->email !!}</td>
                            <td>
                                @foreach($user->roles as $role)
                                    <span class="label label-info">{!! $role->name !!}</span>
                                @endforeach
                            </td>
                            <td class="text-center">
                                <button type="button" class="btn btn-info btn-sm"> <i class="fa fa-eye"></i> View</button>
                                <button type="button" class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i> Edit</button>
                                <button type="button" class="btn btn-danger btn-sm"> <i class="fa fa-trash-o"></i> Delete</button>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </section>
        </div>
    </div>
</div>
@endsection