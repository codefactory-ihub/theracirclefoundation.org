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
        Schema::table('projects_media', function (Blueprint $table) {
            $table->string('media_type')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects_media', function (Blueprint $table) {
            $table->enum('media_type', ['image', 'audio', 'video'])->change();
        });
    }
};
