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
            CREATE TABLE registrations (
                id BIGSERIAL PRIMARY KEY,
                user_id BIGINT NOT NULL,
                class_id BIGINT NOT NULL,
                status VARCHAR(20) NOT NULL DEFAULT 'pending',
                payment_status VARCHAR(20) NOT NULL DEFAULT 'unpaid',
                payment_amount DECIMAL(10,2) NULL,
                notes TEXT NULL,
                created_at TIMESTAMP NULL,
                updated_at TIMESTAMP NULL
            );
        ");

        DB::unprepared("CREATE INDEX registrations_status_payment_status_index ON registrations(status, payment_status);");
        DB::unprepared("CREATE INDEX registrations_user_id_index ON registrations(user_id);");
        DB::unprepared("CREATE INDEX registrations_class_id_index ON registrations(class_id);");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared("DROP TABLE IF EXISTS registrations;");
    }
};
