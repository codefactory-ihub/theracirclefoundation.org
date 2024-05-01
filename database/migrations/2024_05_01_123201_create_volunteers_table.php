<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->id();
            $table->uuid('volunteer_key')->unique()->default(DB::raw('(UUID())'));
            $table->string('fullName', 100);
            $table->string('emailAddress', 100);
            $table->unsignedInteger('age');
            $table->string('phoneNumber', 18);
            $table->string('reason', 255);
            $table->boolean('accepted')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('volunteers');
    }
};
