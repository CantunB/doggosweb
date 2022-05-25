<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('especie');
            $table->string('raza');
            $table->string('tamaño');
            $table->string('sexo');
            $table->string('peso');
            $table->string('edad');
            $table->string('nombre');
            $table->date('f_nacimiento')->nullable();
            $table->string('foto')->nullable();
            $table->foreignId('id_propietario')->constrained('users')->cascadeOnDelete();
            $table->tinyinteger('status')->default(0);
            $table->longText('descripcion')->nullable();
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
        Schema::dropIfExists('pets');
    }
}
