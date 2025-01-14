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
        Schema::create('profile_list', function (Blueprint $table) {
            $table->increments('profileID'); // Primary key
            $table->string('username', 100);
            $table->string('picture', 5000)->nullable();
            $table->unsignedInteger('adminID')->nullable(); // Foreign key
            $table->unsignedInteger('userID')->nullable(); // Foreign key
            $table->unsignedInteger('artistID')->nullable(); // Foreign key
            $table->foreign('adminID')->references('adminID')->on('admin')->onDelete('cascade');
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
        Schema::dropIfExists('profile_list');
    }
};
