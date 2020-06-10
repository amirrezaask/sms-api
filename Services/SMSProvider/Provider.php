<?php


namespace Services\SMSProvider;

use Services\SMSProvider\Models\SMSProviderRequest;
use Services\SMSProvider\Models\SMSProviderResponse;

interface Provider 
{
    public function send(SMSProviderRequest $reqeust): SMSProviderResponse;
}