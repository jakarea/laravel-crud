@extends('layouts.master')
@section('title',$job->jobtitle)
@section('content')
<!-- Feature jobs-->
<div class="container">
    <div class="single">
        <div class="col-md-4">
            <div class="col_3">
                <h3>Todays Jobs</h3>
                <ul class="list_1">
                    <li><a href="#">Department of Health - Western Australia</a></li>
                    <li><a href="#">Australian Nursing Agency currently require experiences</a></li>
                    <li><a href="#">Russia Nursing Agency currently require experiences</a></li>
                    <li><a href="#">The Government of Western Saudi Arbia</a></li>
                    <li><a href="#">Department of Health - Western Australia</a></li>
                    <li><a href="#">Australian Nursing Agency currently require experiences</a></li>
                    <li><a href="#">Russia Nursing Agency currently require experiences</a></li>
                    <li><a href="#">The Scientific Publishing Services in Saudi Arbia</a></li>
                    <li><a href="#">BPO Private Limited in Canada</a></li>
                    <li><a href="#">Executive Tracks Associates in Pakistan</a></li>
                    <li><a href="#">Pyramid IT Consulting Pvt. Ltd. in Pakistan</a></li>
                </ul>
            </div>
            <div class="col_3">
                <h3>Jobs by Category</h3>
                <ul class="list_2">
                    <li><a href="#">Railway Recruitment</a></li>
                    <li><a href="#">Air Force Jobs</a></li>
                    <li><a href="#">Police Jobs</a></li>
                    <li><a href="#">Intelligence Bureau Jobs</a></li>
                    <li><a href="#">Army Jobs</a></li>
                    <li><a href="#">Navy Jobs</a></li>
                    <li><a href="#">BSNL Jobs</a></li>
                    <li><a href="#">Software Jobs</a></li>
                    <li><a href="#">Research Jobs</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-8 single_right">
            <h4><b>{!! $job->jobtitle !!}</b></h4>
            <h3>{!! $job->companyname !!}</h3>
            <h5>Job Description / Responsibility</h5>
            <h4>Job Description / Responsibility</h4>
            <p>{!! $job->jobdescription !!}</p>
            <h4>Job Nature</h4>
            <p>{!! $job->jobnature !!}</p>
            <h4>Educational Requirements</h4>
            <p>{!! $job->edurequirment !!}</p>
            <h4>Experience Requirements</h4>
            <p>{!! $job->exprequirment !!}</p>
            <h4>Job Location</h4>
            <p>{!! $job->joblocation !!}</p>
            <h4>Salary Range</h4>
            <p>{!! $job->salaryrange !!}</p>
            <h4>Job Source</h4>
            <p>{!! $job->jobsource !!}</p>
<hr>
            <div class="guide text-center ">
                <div class=""><b>Apply Instruction</b></div>
                <div class="">
                	<a href="">Apply Online</a>
                	<br>If you want to be a part of a World Class Environment, facilitating Nutrition Health &amp; Wellness, please update your profile on BDJobs and apply by 25th October 2016.
                </div>
                	<span class="date">Application Deadline : <strong> {!! $job->deadline !!}</strong></span>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- Feature jobs/-->
@endsection