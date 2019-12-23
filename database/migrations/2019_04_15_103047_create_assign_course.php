<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignCourse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignCourse', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dept_id')->nullable();
            $table->integer('staff_id')->nullable();
            $table->integer('course_id')->nullable();
            $table->integer('clasSize')->nullable();
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
        Schema::dropIfExists('assignCourse');
    }
}
