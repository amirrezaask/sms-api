<?php

namespace Database;

interface DatabaseEntry {
    public function columns(): array;
    public function values(): array;
    public function insert(): string;
}