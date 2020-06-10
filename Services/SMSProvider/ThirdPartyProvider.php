<?php

namespace Services\SMSProvider;

use Database\DatabaseContext;
use Database\Models\ApiLog;
use Exception;
use Models\Requests\NewSMSRequest;
use Services\SMSProvider\Exceptions\SMSProviderException;
use Services\SMSProvider\Provider;
use Services\SMSProvider\Models\SMSProviderRequest;
use Services\SMSProvider\Models\SMSProviderResponse;

class ThirdPartyProvider implements Provider
{
    private array $providers = [
        'Services\SMSProvider\Providers\ThirdPartyProvider1',
        'Services\SMSProvider\Providers\ThirdPartyProvider2',
    ];
    public function send(NewSMSRequest $reqeust): SMSProviderResponse
    {
        foreach($this->providers as $provider) 
        {
            try{
                $resp = $provider->send($reqeust);
                $log = new ApiLog(intval(DatabaseContext::getInstance()->lastInsertId()), $provider->getRoute(), true, $resp->__toString());
                DatabaseContext::getInstance()->query($log->insert());
                return $resp;
            } catch (Exception $ex) {
                $log = new ApiLog(intval(DatabaseContext::getInstance()->lastInsertId()), $provider->getRoute(), false, $resp->__toString());
                DatabaseContext::getInstance()->query($log->insert());
                continue;
            }
        }
        throw new SMSProviderException();
    }

}