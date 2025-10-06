<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared("ALTER TABLE classes ADD COLUMN status VARCHAR(50) DEFAULT 'available';");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared("ALTER TABLE classes DROP COLUMN status;");
    }
};
