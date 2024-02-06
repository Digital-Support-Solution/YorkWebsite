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
        Schema::create('blogs', function (Blueprint $table) {
            $table->string('title');
            $table->string('slug');
            $table->text('details');
            $table->foreignId('user_id');
            $table->mediumText('meta_description')->nullable();
            $table->mediumText('keywords')->nullable();
            $table->string('preview_image')->nullable();
            $table->boolean('is_featured')->default(0);
            $table->boolean('is_enabled')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
