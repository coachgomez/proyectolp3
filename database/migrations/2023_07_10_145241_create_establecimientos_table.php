<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstablecimientosTable extends Migration
{
    public function up()
    {
        Schema::create('establecimientos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('direccion');
            $table->string('Horario_atencion');
            $table->string('tipo_negocio');
            $table->string('servicios_ofrecidos');
            $table->timestamps();

            $table->unsignedBigInteger('responsable_id')->nullable();
            $table->foreign('responsable_id')->references('id')->on('responsables')->onDelete('SET NULL');
        });
    }

    public function down()
    {
        Schema::dropIfExists('establecimientos');
    }
}
