<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultyBodiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty_bodies', function (Blueprint $table) {
            $table->string('fid');
            $table->string('name');
            $table->integer('idno');
            $table->string('bodyname');
            $table->string('bodyid')->unique();
            $table->string('paiddate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faculty_bodies');
    }
}
