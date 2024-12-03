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
        Schema::create('button_header', function (Blueprint $table) {
            $table->foreignId('button_id')->constrained('button');
            $table->unsignedBigInteger('header_id');
            $table->timestamps();
            $table->foreign('header_id')->references('id')->on('header');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('button_header');
    }
};
