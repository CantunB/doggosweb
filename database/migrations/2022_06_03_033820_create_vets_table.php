<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vets', function (Blueprint $table) {
            $table->id();
            $table->string('degree');
            $table->string('nombre');
            $table->string('paterno');
            $table->string('materno')->nullable();
            $table->date('f_nacimiento')->nullable();
            $table->integer('experience')->nullable();
            $table->string('email')->unique();
            $table->longText('descripcion')->nullable();
            $table->string('avatar')->nullable();
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
        Schema::dropIfExists('vets');
    }
}
