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
        DB::unprepared("
            CREATE TABLE cache (
                key VARCHAR(255) PRIMARY KEY,
                value TEXT NULL,
                expiration INTEGER NOT NULL
            );
        ");

        DB::unprepared("
            CREATE TABLE cache_locks (
                key VARCHAR(255) PRIMARY KEY,
                owner VARCHAR(255) NOT NULL,
                expiration INTEGER NOT NULL
            );
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared("DROP TABLE IF EXISTS cache_locks;");
        DB::unprepared("DROP TABLE IF EXISTS cache;");
    }
};
