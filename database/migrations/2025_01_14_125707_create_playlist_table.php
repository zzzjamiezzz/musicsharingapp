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
        Schema::create('playlist', function (Blueprint $table) {
            $table->increments('playlistID'); // Primary key
            $table->string('username', 100);
            $table->unsignedInteger('musicID'); // Foreign key
            $table->unsignedInteger('userID')->nullable(); // Foreign key
            $table->unsignedInteger('artistID')->nullable(); // Foreign key
            $table->foreign('musicID')->references('musicID')->on('music_upload')->onDelete('cascade');
            $table->foreign('userID')->references('userID')->on('user')->onDelete('cascade');
            $table->foreign('artistID')->references('artistID')->on('artist')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('playlist');
    }
};
