<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('job_id');
            $table->string('companyname',100);
            $table->string('jobtitle',100);
            $table->text('jobdescription');
            $table->string('jobnature',60);
            $table->string('edurequirment',120);
            $table->string('exprequirment',120);
            $table->string('jobrequirment',120);
            $table->string('joblocation',80);
            $table->string('salaryrange',100);
            $table->string('otherbenefits',100);
            $table->string('jobsource',100);
            $table->date('deadline');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
