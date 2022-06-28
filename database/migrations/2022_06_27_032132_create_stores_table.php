<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('razon_social',120);
            $table->string('direccion',60);
            $table->string('telefono1',20);
            $table->string('celular2',45);
            $table->string('correo',60);
            $table->string('identificacion_local',60);

            $table->unsignedBigInteger('id_malls');
            $table->foreign("id_malls")->references("id")->on("malls")->onDelete("cascade")->onUpdate("cascade");
            
            $table->unsignedBigInteger('id_type_identification');
            $table->foreign("id_type_identification")->references("id")->on("type_commercial_identifications")->onDelete("cascade")->onUpdate("cascade");

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
        Schema::dropIfExists('stores');
    }
};
