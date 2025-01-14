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
        Schema::create('report_content', function (Blueprint $table) {
            $table->increments('reportID'); // Primary key
            $table->string('email', 100);
            $table->string('reportSubject', 500);
            $table->string('details', 1000);
            $table->string('attachment', 5000)->nullable();
            $table->unsignedInteger('userID'); // Foreign key
            $table->foreign('userID')->references('userID')->on('user')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report_content');
    }
};
