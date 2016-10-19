<?php

namespace App\Http\Controllers;
use App\Job;
use Carbon\Carbon;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    public function index(){
    	$jobs= Job::orderBy('job_id','desc')->take(10)->get();
    	$todaysJobs =  Job::orderBy('job_id','desc')->where('created_at', '>', Carbon::today())->take(10)->get();
    	return view('index',compact('jobs','todaysJobs'));
    }
}
