<?php

namespace Services\SMSProvider;

use Services\SMSProvider\Provider;
use Services\SMSProvider\Models\SMSProviderRequest;
use Services\SMSProvider\Models\SMSProviderResponse;

class ThirdPartyProvider implements Provider
{
    private array $providers = [
        'Services\SMSProvider\Providers\ThirdPartyProvider1',
        'Services\SMSProvider\Providers\ThirdPartyProvider2',
    ];
    public function send(SMSProviderRequest $reqeust): SMSProviderResponse
    {
        
    }

}