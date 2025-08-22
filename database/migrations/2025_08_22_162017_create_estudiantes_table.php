<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->bigIncrements('id_estudiante');
            $table->string('nombre', 100);
            $table->string('apellidos', 150);
            $table->integer('edad');
            $table->string('email')->unique();
            $table->string('telefono', 10);

            $table->unsignedBigInteger('grupo_id');
            $table->foreign('grupo_id')->references('id_grupo')->on('grupos')->onDelete('cascade');

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
        Schema::dropIfExists('estudiantes');
    }
}
