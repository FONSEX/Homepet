<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMascotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->increments('cod_mascota');
            $table->integer('cod_raza');
            $table->string('nombrem');
            $table->string('edadm');
            $table->string('sexom');
            $table->integer('pesom');
            $table->integer('cod_vet');
            $table->integer('cod_responsable');
            $table->date('fechan');
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
        Schema::dropIfExists('mascotas');
    }
}
