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
        Schema::create('adocoes', function (Blueprint $table) {
            $table->id();

            $table->string('email', 100);
            $table->decimal('valor');

            $table->unsignedBigInteger('pet_id');
            $table->foreign('pet_id')->references('id')->on('pets');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adocoes');
    }
};
