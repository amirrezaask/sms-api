<?php


namespace Services\SMSProvider;

use Services\SMSProvider\Models\SMSProviderRequest;
use Services\SMSProvider\Models\SMSProviderResponse;
use Models\Requests\NewSMSRequest;

interface Provider 
{
    public function send(NewSMSRequest $reqeust): SMSProviderResponse;
}