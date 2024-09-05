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
        Schema::create('google_form_records', function (Blueprint $table) {
            $table->id();
            $table->json('form_data');
            $table->foreignId('student_id')->constrained('users')->onDelete('cascade'); // Foreign key to users table
            $table->boolean('is_valid')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('google_form_records');
    }
};
