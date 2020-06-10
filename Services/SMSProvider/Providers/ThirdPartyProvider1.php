<?php


namespace Services\SMSProvider\Providers;

use Services\SMSProvider\Models\SMSProviderRequest;
use Services\SMSProvider\Models\SMSProviderResponse;
use Services\SMSProvider\SMSProvider as SMSProviderSMSProvider;
use Services\SMSProvider\Provider;

class ThirdPartyProvider1 implements Provider
{
    private string $route = "http://localhost:81";
    
    public function send(SMSProviderRequest $payload): SMSProviderResponse
    {

    }
}