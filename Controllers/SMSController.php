<?php

namespace Controllers;

use Database\DatabaseContext;
use Models\Requests\NewSMSRequest;
use Database\Models\RequestLog;
use Exception;
use PDOException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SMSController 
{
    public function send(): Response 
    {
        $newSMSRequest = NewSMSRequest::fromGlobals();
        $databaseContext = DatabaseContext::getInstance();
        $smsRequestLog = new RequestLog($newSMSRequest->getBody(), $newSMSRequest->getNumber(), time());
        try{
            $databaseContext->query($smsRequestLog->insert());
    
        } catch(PDOException $ex) {
            //Log error
        }
        
    }
}