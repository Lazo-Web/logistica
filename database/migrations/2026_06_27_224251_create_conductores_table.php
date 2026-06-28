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
        Schema::create('conductores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->string('dni',10)->unique();
            $table->string('direccion',200);
            $table->string('ciudad',100);
            $table->string('provincia',100);
            $table->string('telefono',20)->unique();
            $table->string('email',100)->unique();
            $table->date('fecha_nacimiento');
            $table->date('fecha_contratacion');
            $table->string('licencia',20)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conductores');
    }
};
