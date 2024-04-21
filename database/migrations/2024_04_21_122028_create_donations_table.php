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
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('phone_number', 16)->nullable();
            $table->foreignId('project_id')->nullable()->constrained('projects');
            $table->decimal('amount');
            $table->string('notes', 255)->nullable();
            $table->string('payment_reference', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
