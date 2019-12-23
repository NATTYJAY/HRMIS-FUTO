<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courseTbl', function (Blueprint $table) {
            $table->increments('id');
            $table->string('courseCode')->nullable();
            $table->string('courseName')->nullable();
            $table->string('credit_unit')->nullable();
            $table->string('semester')->nullable();
            $table->integer('dept_id')->nullable();
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
        Schema::dropIfExists('courseTbl');
    }
}
