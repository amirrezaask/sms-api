<?php


namespace Services\SMS\Exceptions;

use Exception;

class SMSProviderTimeoutException  extends Exception
{
    
    public function __construct()
    {
        parent::__construct("Timeout");
    }


}