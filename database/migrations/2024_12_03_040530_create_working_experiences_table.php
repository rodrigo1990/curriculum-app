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
        Schema::create('working_experiences', function (Blueprint $table) {
            $table->foreignId('experience_id')->constrained('experiences');
            $table->string('company');
            $table->text('tasks');
            $table->text('achievements');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('working_experiences');
    }
};