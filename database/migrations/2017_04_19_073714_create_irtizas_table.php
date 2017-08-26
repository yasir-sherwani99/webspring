<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIrtizasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('irtizas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student');
            $table->string('father');
            $table->string('gender');
            $table->string('school');
            $table->bigInteger('roll');
            $table->string('classs');
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
        Schema::dropIfExists('irtizas');
    }
}
