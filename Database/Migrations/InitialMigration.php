<?php


namespace Database\Migrations;

class InitialMigration implements Migration
{
    public function up(): string
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
                created_at timestamp,
            );"
            ];
    }
    public function down(){}
}