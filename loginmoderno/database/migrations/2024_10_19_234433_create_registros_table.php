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
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->string('titleDocument');
            $table->string('school');
            $table->string('nameProgram');
            $table->string('collaborators');
            $table->string('idCollaborators');
            $table->string('email');
            $table->foreignId('id_departament')
                  ->constrained('departaments');
            $table->foreignId('id_municipality')
                  ->constrained('municipality');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros');
    }
};
