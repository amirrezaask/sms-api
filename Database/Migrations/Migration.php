<?php


namespace Database\Migrations;


interface Migration
{
    public function up(): array;
    public function down(): array;
}