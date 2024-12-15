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
        Schema::create('buttons_body', function (Blueprint $table) {
            $table->foreignId('button_id')->constrained('buttons');
            $table->unsignedBigInteger('body_id');
            $table->timestamps();
            $table->foreign('body_id')->references('id')->on('bodies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buttons_body');
    }
};
