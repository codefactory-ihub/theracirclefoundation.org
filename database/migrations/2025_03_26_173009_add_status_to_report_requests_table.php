<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('report_requests', function (Blueprint $table) {
            //
            $table->enum('status', [
                'pending',     // Request just created
                'accepted',   // Request approved
                'rejected',   // Request denied
                'completed',  // Report generated
            ])->default('pending');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('report_requests', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
