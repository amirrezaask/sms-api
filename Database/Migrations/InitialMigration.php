<?php


namespace Database\Migrations;

class InitialMigration implements Migration
{
    public function up(): array
    {
        return ["CREATE TABLE request_logs (
            request_log_id INT AUTO_INCREMENT PRIMARY KEY,
            body TEXT,
            number varchar(50),
            request_time timestamp);",
            
            "CREATE TABLE api_logs (
                api_log_id INT AUTO_INCREMENT PRIMARY KEY,
                request_log_id INT,
                api_route varchar(255),
                success boolean,
                api_response TEXT,
                created_at timestamp DEFAULT CURRENT_TIMESTAMP,
            );"
            ];
    }
    public function down() : array {
        return [
            "DROP TABLE request_logs;",
            "DROP TABLE api_logs;",
        ];
    }
}