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
            CREATE TABLE classes (
                id BIGSERIAL PRIMARY KEY,
                title VARCHAR(255) NOT NULL,
                type VARCHAR(50) NOT NULL DEFAULT 'beginner',
                description TEXT NULL,
                date DATE NOT NULL,
                start_time TIME NOT NULL,
                duration DECIMAL(3,1) NOT NULL DEFAULT 3.0,
                max_students INTEGER NOT NULL DEFAULT 12,
                price DECIMAL(8,2) NOT NULL,
                instructor_id BIGINT NOT NULL,
                created_at TIMESTAMP NULL,
                updated_at TIMESTAMP NULL
            );
        ");

        DB::unprepared("CREATE INDEX classes_date_start_time_index ON classes(date, start_time);");
        DB::unprepared("CREATE INDEX classes_type_index ON classes(type);");
        DB::unprepared("CREATE INDEX classes_instructor_id_index ON classes(instructor_id);");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared("DROP TABLE IF EXISTS classes;");
    }
};
