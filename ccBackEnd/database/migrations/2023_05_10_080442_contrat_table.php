<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContratTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type',50);
            $table->integer('numero');
            $table->dateTime('dateSignature');
            $table->integer('duree');
            $table->unsignedInteger('id_client');
            $table->foreign('id_client')->references('id')->on('client')->onDelete('cascade');
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
        Schema::dropIfExists('contrat');
    }
}
