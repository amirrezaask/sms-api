<?php


namespace SMSProvider;

use Services\SMSProvider\Models\SMSProviderPayload;
use Services\SMSProvider\Models\SMSResponse;

interface SMSProvider 
{
    public function send(SMSProviderPayload $payload): SMSResponse;
}