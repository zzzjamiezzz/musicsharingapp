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
        Schema::create('feedback', function (Blueprint $table) {
            $table->increments('feedbackID'); // Primary key
            $table->string('email', 100);
            $table->string('feedbackSubject', 500);
            $table->string('details', 1000);
            $table->string('attachment', 5000)->nullable();
            $table->unsignedInteger('userID')->nullable(); // Foreign key
            $table->unsignedInteger('artistID')->nullable(); // Foreign key
            $table->unsignedInteger('adminID')->nullable(); // Foreign key
            $table->foreign('userID')->references('userID')->on('user')->onDelete('cascade');
            $table->foreign('artistID')->references('artistID')->on('artist')->onDelete('cascade');
            $table->foreign('adminID')->references('adminID')->on('admin')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
