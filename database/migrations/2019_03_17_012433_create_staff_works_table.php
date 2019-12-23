<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_works', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('staff_id');
            $table->string('status')->nullable();
            $table->string('rank')->nullable();
            $table->string('date_assumption_duty')->nullable();
            $table->string('date_ractification')->nullable();
            $table->string('step')->nullable();
            $table->string('date_confirm')->nullable();
            $table->string('status_first_appoint')->nullable();
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
        Schema::dropIfExists('staff_works');
    }
}
