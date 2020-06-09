<?php


namespace SMSProvider;

use Services\SMSProvider\Models\SMSPayload;
use Services\SMSProvider\Models\SMSResponse;

interface SMSProvider 
{
    public function send(SMSPayload $payload): SMSResponse;
}