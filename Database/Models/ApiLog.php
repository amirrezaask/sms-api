<?php



namespace Database\Models;

use Database\DatabaseEntry;

class ApiLog implements DatabaseEntry
{
    private int $RequestLogId;
    private string $ApiRoute;
    private bool $Success;
    private string $ApiResponse;

    public function ApiLog(int $request_log_id, string $api_route, bool $success, string $api_response) 
    {
        $this->RequestLogId = $request_log_id;
        $this->ApiRoute = $api_route;
        $this->Success = $success;
        $this->ApiResponse = $api_response;
    }
    public function columns() : array
    {
        return [
            "request_log_id",
            "api_route",
            "success",
            "api_response",
        ];
    }
    public function values() : array
    {
        return [
           $this->RequestLogId,
           $this->ApiRoute,
           $this->Success,
           $this->ApiResponse
        ];
    }
    
    public function insert() : string
    {
        $columnsJoined = implode(', ',$this->columns());
        $valuesJoined = implode(', ',$this->values());
        
        return "INSERT INTO $this->table ($columnsJoined)
         VALUES ($valuesJoined);";
    }
}