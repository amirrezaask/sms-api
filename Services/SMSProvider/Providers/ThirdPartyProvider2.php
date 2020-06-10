<?php


namespace Services\SMSProvider;

use Services\SMSProvider\Models\SMSProviderPayload;
use Services\SMSProvider\Models\SMSProviderRequest;
use Services\SMSProvider\Models\SMSProviderResponse;
use Services\SMSProvider\Provider;

class ThirdPartyProvider2 implements Provider
{
    private string $route = "http://localhost:82";
    
    public function send(SMSProviderRequest $payload): SMSProviderResponse
    {

    }
}