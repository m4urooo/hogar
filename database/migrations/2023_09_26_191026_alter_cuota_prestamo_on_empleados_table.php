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
        Schema::table('Empleados', function (Blueprint $table) {
            $table->renameColumn('cuotas_prestamo_cla', 'cantidad_cuotas_prestamo_cla')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Empleados', function (Blueprint $table) {
            //
        });
    }
};
