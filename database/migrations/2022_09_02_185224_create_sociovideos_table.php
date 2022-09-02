<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSociovideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sociovideos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('url');
            $table->string('epigrafe');
            $table->text('descripcion');
            $table->integer('orden');
            $table->unsignedBigInteger('empresa_id');
            
            $table->timestamps();
            
            $table->foreign('empresa_id')->references('id')->on('empresas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sociovideos');
    }
}
