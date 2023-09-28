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
            $table->renameColumn('asig_familiar', 'asig_familiar_cantidad')->nullable();


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
