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
            $table->string('email');
            $table->unsignedBigInteger('id_departament')->nullable();
            $table->foreign('id_departament')
                    ->references('id')
                    ->on('departaments');
            $table->unsignedBigInteger('id_municipality')->nullable();
            $table->foreign('id_municipality')
                    ->references('id')
                    ->on('municipalities');
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
