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
            $table->id();
            $table->string('company');
            $table->date('date_start');
            $table->date('date_end')->nullable();
            $table->boolean('current')->default(false);
            $table->text('tasks');
            $table->text('achievements');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('page_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade');
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