<?php

namespace Controllers;

use Database\DatabaseContext;
use Models\Requests\NewSMSRequest;
use Database\Models\RequestLog;
use Exception;
use PDOException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Services\SMSProvider;
use Services\SMSProvider\Exceptions\SMSProviderException;
use Services\SMSProvider\ThirdPartyProvider;

class SMSController 
{
    public function send(): Response 
    {
        $newSMSRequest = NewSMSRequest::fromGlobals();
        $databaseContext = DatabaseContext::getInstance();
        $smsRequestLog = new RequestLog($newSMSRequest->getBody(), $newSMSRequest->getNumber(), time());
        try{
            $databaseContext->query($smsRequestLog->insert());
            $smsRequestLog->setRequestLogId($databaseContext->lastInsertId());
            try {
                $provider = new ThirdPartyProvider();
                $provider->send($newSMSRequest);
            } catch (SMSProviderException $ex) {
                $databaseContext->query($smsRequestLog->setSuccessTrueStmt());
            } catch (Exception $ex) {
                //a
            }
    
        } catch(PDOException $ex) {
            //Log error
        }
        
        
        
    }
}