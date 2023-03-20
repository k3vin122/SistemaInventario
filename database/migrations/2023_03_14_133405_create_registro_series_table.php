<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_series', function (Blueprint $table) {
            $table->id();
            $table ->string ('serie');
            $table->unsignedBigInteger('id_guia');
            $table->foreign("id_guia")
            ->references("id")
            ->on("guias")
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
        Schema::dropIfExists('registro_series');
    }
}
