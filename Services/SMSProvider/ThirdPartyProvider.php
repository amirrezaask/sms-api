<?php


namespace Services\SMSProvider;

use Services\SMSProvider\Models\SMSProviderPayload;
use Services\SMSProvider\Models\SMSProviderRequest;
use Services\SMSProvider\Models\SMSProviderResponse;
use SMSProvider\SMSProvider;

class ThirdPartyProvider implements SMSProvider
{
    public function send(SMSProviderRequest $payload): SMSProviderResponse
    {

    }
}