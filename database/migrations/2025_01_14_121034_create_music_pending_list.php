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
        Schema::create('pending_list', function (Blueprint $table) {
            $table->increments('pendingListID'); // Primary key
            $table->string('details', 1000);
            $table->boolean('approve')->default(false);
            $table->unsignedInteger('adminID'); // Foreign key
            $table->foreign('adminID')->references('adminID')->on('admin')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('music_pending_list');
    }
};
