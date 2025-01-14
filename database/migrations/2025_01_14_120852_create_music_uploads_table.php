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
        Schema::create('music_uploads', function (Blueprint $table) {
            $table->increments('musicID'); // Primary key
            $table->string('username', 100);
            $table->string('artists', 100);
            $table->string('attachment', 5000);
            $table->string('album', 1000)->nullable();
            $table->string('playlist', 1000)->nullable();
            $table->string('albumCover', 5000)->nullable();
            // $table->unsignedInteger('artistID'); // Foreign key
            // $table->unsignedInteger(column: 'playlistID')->nullable(); // Foreign key
            // $table->unsignedInteger('albumID')->nullable(); // Foreign key
            // $table->foreign('artistID')->references('artistID')->on('artist')->onDelete('cascade');
            // $table->foreign('playlistID')->references('playlistID')->on('playlist')->onDelete('cascade');
            // $table->foreign('albumID')->references('albumID')->on('album')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('music_uploads');
    }
};
