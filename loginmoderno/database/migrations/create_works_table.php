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
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('name_reality')->nullable();
            $table->string('descrip_reality')->nullable();
            $table->string('name_enfoque')->nullable();
            $table->string('type_investigation')->nullable();
            $table->unsignedBigInteger('registro_id')->unique();
            $table->foreign('registro_id')
                    ->references('id')
                    ->on('registros')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
