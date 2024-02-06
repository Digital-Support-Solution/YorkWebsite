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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')->nullable();
            $table->string('patient_name');
            $table->string('patient_phone');
            $table->string('preferred_date');
            $table->string('preferred_time');
            $table->mediumText('reason_for_visit');
            $table->mediumText('doctor_remarks')->nullable();
            $table->enum('status',['Attended','Pending','Unattended'])->default('Unattended');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
