<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_info',function(Blueprint $table){
            $table->increments('id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->string('department')->nullable();
            $table->string('perm_add')->nullable();
            $table->string('pres_add')->nullable();
            $table->string('phone')->nullable();
            $table->string('blood_group')->nullable();
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
        Schema::drop('users_info');
    }
}