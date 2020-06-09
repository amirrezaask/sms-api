<?php

namespace Controllers;

use Models\NewSMSRequest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SMSController 
{
    public function send(): Response 
    {
        $newSMSRequest = NewSMSRequest::fromGlobals();
        
    }
}