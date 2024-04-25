<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects_media', function (Blueprint $table) {
            $table->id();
            $table->uuid('media_key')->unique()->default(DB::raw('(UUID())'));
            $table->enum('source',['cloudinary', 'youtube']);
            $table->enum('media_type', ['audio', 'video', 'image']);
            $table->string('public_url', 255);
            $table->string('public_id',100)->nullable();
            $table->foreignId('project_id')->constrained('projects');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects_media');
    }
};
