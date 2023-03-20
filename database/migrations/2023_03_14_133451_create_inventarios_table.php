<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id();
            $table ->string ('n_invenatario')->unique();
            $table ->string ('unidad');
            $table ->string ('mac')->unique();
            $table ->string ('recinto');
            $table ->string ('ip')->unique();
            $table ->string ('recepciona');
            $table ->string ('entrega');
            $table->unsignedBigInteger('id_registroSerie');
            $table->unsignedBigInteger('id_tipoEquipo');
            $table->unsignedBigInteger('id_modelo');
            $table->unsignedBigInteger('id_marca');
            $table->foreign("id_registroSerie")
            ->references("id")
            ->on("registro_series")
            ->onDelete("cascade")
            ->onUpdate("cascade");
            $table->foreign("id_tipoEquipo")
            ->references("id")
            ->on("tipo_equipos")
            ->onDelete("cascade")
            ->onUpdate("cascade");
            $table->foreign("id_modelo")
            ->references("id")
            ->on("modelos")
            ->onDelete("cascade")
            ->onUpdate("cascade");
            $table->foreign("id_marca")
            ->references("id")
            ->on("marcas")
            ->onDelete("cascade")
            ->onUpdate("cascade");
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
        Schema::dropIfExists('inventarios');
    }
}