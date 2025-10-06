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
            CREATE TABLE jobs (
                id BIGSERIAL PRIMARY KEY,
                queue VARCHAR(255) NOT NULL,
                payload TEXT NOT NULL,
                attempts INTEGER NOT NULL DEFAULT 0,
                reserved_at INTEGER NULL,
                available_at INTEGER NOT NULL,
                created_at INTEGER NOT NULL
            );
        ");

        DB::unprepared("CREATE INDEX jobs_queue_index ON jobs(queue);");

        DB::unprepared("
            CREATE TABLE job_batches (
                id VARCHAR(255) PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                total_jobs INTEGER NOT NULL,
                pending_jobs INTEGER NOT NULL,
                failed_jobs INTEGER NOT NULL,
                failed_job_ids TEXT NULL,
                options TEXT NULL,
                cancelled_at INTEGER NULL,
                created_at INTEGER NOT NULL,
                finished_at INTEGER NULL
            );
        ");

        DB::unprepared("
            CREATE TABLE failed_jobs (
                id BIGSERIAL PRIMARY KEY,
                uuid VARCHAR(255) UNIQUE NOT NULL,
                connection TEXT NOT NULL,
                queue TEXT NOT NULL,
                payload TEXT NOT NULL,
                exception TEXT NOT NULL,
                failed_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
            );
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared("DROP TABLE IF EXISTS failed_jobs;");
        DB::unprepared("DROP TABLE IF EXISTS job_batches;");
        DB::unprepared("DROP TABLE IF EXISTS jobs;");
    }
};
