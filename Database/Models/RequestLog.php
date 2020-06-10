<?php

namespace Database\Models;

use Models\Requests\NewSMSRequest;
use Database\DatabaseEntry;

class RequestLog extends NewSMSRequest implements DatabaseEntry
{
    private string $table;
    private int $timestamp;

    public function __construct(string $body, $number, int $timestamp)
    {
        $this->table = getenv("LOG_TABLE") ?? "request_logs";
        $this->timestamp = $timestamp;
        parent::__construct($body, $number);
    }
    public function columns() : array
    {
        return [
            "body",
            "number",
            "request_time",
        ];
    }
    public function values() : array
    {
        return [
           $this->body,
           $this->number,
           $this->timestamp,
        ];
    }
    
    public function insert() : string
    {
        $columnsJoined = implode(', ',$this->columns());
        $valuesJoined = implode(', ',$this->values());
        
        return "INSERT INTO $this->table ($columnsJoined)
         VALUES ($valuesJoined);";
    }

  

    /**
     * Get the value of timestamp
     */ 
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set the value of timestamp
     *
     * @return  self
     */ 
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }
}