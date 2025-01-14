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
        Schema::create('artist', function (Blueprint $table) {
            $table->increments('artistID'); // Primary key
            $table->string('username', 100)->unique();
            $table->string('email', 100)->unique();
            $table->string('phone', 100)->nullable();
            $table->string('password', 100);
            $table->string('mediaLinks', 100)->nullable();
            $table->string('websiteLinks', 100)->nullable();
            $table->string('biography', 1500)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artist');
    }
};
