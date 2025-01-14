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
        Schema::table('music_uploads', function (Blueprint $table) {
            $table->unsignedInteger('artistID'); // Foreign key
            $table->unsignedInteger('playlistID')->nullable(); // Foreign key
            $table->unsignedInteger('albumID')->nullable(); // Foreign key
            $table->foreign('artistID')->references('artistID')->on('artists')->onDelete('cascade');
            $table->foreign('playlistID')->references('playlistID')->on('playlists')->onDelete('cascade');
            $table->foreign('albumID')->references('albumID')->on('albums')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('music_uploads', function (Blueprint $table) {
            $table->dropForeign(['artistID', 'playlistID', 'albumID']);
            $table->dropColumn(['artistID', 'playlistID', 'albumID']);
        });
    }
};
