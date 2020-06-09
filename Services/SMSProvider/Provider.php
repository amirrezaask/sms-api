<?php


namespace SMSProvider;

use Services\SMSProvider\Models\SMSProviderRequest;
use Services\SMSProvider\Models\SMSProviderResponse;

interface SMSProvider 
{
    public function send(SMSProviderRequest $reqeust): SMSProviderResponse;
}