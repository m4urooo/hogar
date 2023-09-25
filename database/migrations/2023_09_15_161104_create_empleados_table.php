<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('empleados', function (Blueprint $table) {


            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('rut')->unique();
            $table->string('cargo');
            $table->string('salud');
            $table->string('valor_salud');
            $table->string('afp');
            $table->string('valor_afp');
            // $table->string('seguro_cesantia');
            $table->string('tipo_contrato');
            $table->string('fecha_contrato');
            $table->string('sueldo_base');
            $table->string('valor_hora_ex');
            $table->string('asig_familiar');
            $table->string('caja_comp');
            $table->string('valor_caja_comp');
            $table->string('email')->nullable();
            $table->string('hogar');            
            // $table->string('prestamo_cla');            
            // $table->string('fecha_prestamo_cla');            
            // $table->string('cuotas_prestamo_cla');            
            $table->rememberToken();
            $table->timestamps();

            // $table->foreign('id_hogar')
            // ->references('id')
            // ->on('hogars');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
