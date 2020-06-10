<?php


namespace Services\SMSProvider\Exceptions;

use Exception;

class SMSProviderException  extends Exception
{
    
    public function __construct()
    {
        parent::__construct("Timeout");
    }


}