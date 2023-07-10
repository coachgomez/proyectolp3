<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadesCapacitacionTable extends Migration
{
    public function up()
    {
        Schema::create('actividades_capacitacion', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_responsable');
            $table->string('nombre_establecimiento');
            $table->string('nombre_Actividad');
            $table->text('descripcion_Actividad');
            $table->string('tipo_capacitacion');
            $table->text('descripcion_capacitacion');
            $table->timestamps();
            
            $table->unsignedBigInteger('establecimiento_id');
            $table->foreign('establecimiento_id')->references('id')->on('establecimientos')->onDelete('CASCADE');
        });
    }

    public function down()
    {
        Schema::dropIfExists('actividades_capacitacion');
    }
}
