<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLeaveActualLeaveLeavetbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('leavetbl', function (Blueprint $table) {
            //
             $table->string('leaveActualYear')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('leavetbl', function (Blueprint $table) {
            //
            $table->string('leaveActualYear');
        });
    }
}
