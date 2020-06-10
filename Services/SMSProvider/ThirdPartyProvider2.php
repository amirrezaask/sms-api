<?php


namespace Services\SMSProvider;

use Services\SMSProvider\Models\SMSProviderPayload;
use Services\SMSProvider\Models\SMSProviderRequest;
use Services\SMSProvider\Models\SMSProviderResponse;
use SMSProvider\SMSProvider;

class ThirdPartyProvider2 implements SMSProvider
{
    private string $route = "http://localhost:82";
    
    public function send(SMSProviderRequest $payload): SMSProviderResponse
    {

    }
}