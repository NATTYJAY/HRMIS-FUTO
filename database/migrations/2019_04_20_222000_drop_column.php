<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('student_tbl', function (Blueprint $table) {
            //
            $table->dropColumn('fname');
            $table->dropColumn('lname');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student_tbl', function (Blueprint $table) {
            //
            $table->dropColumn('fname');
            $table->dropColumn('lname');
        });
    }
}
