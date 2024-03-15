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
        Schema::create('attivitas', function (Blueprint $table) {
            $table->id();
            $table->string('nomeAttività');
            $table->string('descrizioneAttività');
            $table->string('statoAttività');
            $table->foreignId('progetto_id');
            $table ->foreign('progetto_id')->references('id')->on('progettos')->onDelete('cascade') ->onUpdate('cascade');
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
        Schema::dropIfExists('attivitas');
    }
};
