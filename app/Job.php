<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = "jobs";
    protected $primaryKey = "job_id";
    protected $fillable = [
    	'companyname'
    	,'jobtitle'
    	,'jobdescription'
    	,'jobnature'
    	,'edurequirment'
    	,'exprequirment'
    	,'jobrequirment'
    	,'joblocation'
    	,'salaryrange'
    	,'otherbenefits'
    	,'jobsource'
    ];
}