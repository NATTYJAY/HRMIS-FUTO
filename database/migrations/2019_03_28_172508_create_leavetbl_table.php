<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeavetblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leavetbl', function (Blueprint $table) {
            $table->increments('id');
            $table->string('staff_id');
            $table->string('leave_type')->nullable();
            $table->string('leave_applied_year')->nullable();
            $table->string('leave_start_yr')->nullable();
            $table->string('leave_end_yr')->nullable();
            $table->string('leave_reasons')->nullable();
            $table->string('leave_recommended_yr')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('leavetbl');
    }
}
