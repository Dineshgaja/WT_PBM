<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registations', function (Blueprint $table) {
            $table->string('id');
            $table->string('type');
            $table->string('name');
            $table->string('idno');
            $table->integer('phno');
            $table->string('bname');
            $table->string('bid');
            $table->string('ispaid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registations');
    }
}
