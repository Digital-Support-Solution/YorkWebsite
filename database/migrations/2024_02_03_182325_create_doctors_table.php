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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('doctor_name');
            $table->string('doctor_image')->nullable();
            $table->string('qualifications')->nullable();
            $table->text('description')->nullable();
            $table->mediumText('interests')->nullable();
            $table->string('facebook_handle')->nullable();
            $table->string('linkedin_handle')->nullable();
            $table->string('twitter_handle')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
