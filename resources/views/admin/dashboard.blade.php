@extends('admin.layouts.master')
@section('title','Dashboard')

@section('content')
<div class="col-sm-12">
    @include('admin.partial.breadcumb')
    <section class="panel">
        <header class="panel-heading">
            Heading goes here..
            <span class="tools pull-right">
            <a href="javascript:;" class="fa fa-chevron-down"></a>
            <a href="javascript:;" class="fa fa-cog"></a>
            <a href="javascript:;" class="fa fa-times"></a>
            </span>
        </header>
        <div class="panel-body">
            This is a sample page
        </div>
    </section>
</div>
@endsection
