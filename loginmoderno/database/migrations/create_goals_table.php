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
        Schema::create('goals', function (Blueprint $table) {
            $table->id();
            $table->string('general_Goal')->nullable();
            $table->string('specific_Goal1')->nullable();
            $table->string('specific_Goal2')->nullable();
            $table->string('specific_Goal3')->nullable();
            $table->string('specific_Goal4')->nullable();
            $table->foreignId('id_registro')
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
        Schema::dropIfExists('goals');
    }
};
