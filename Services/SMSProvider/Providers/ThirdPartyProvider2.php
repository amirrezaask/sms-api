<?php


namespace Services\SMSProvider;

use Models\Requests\NewSMSRequest;
use Services\SMSProvider\Models\SMSProviderPayload;
use Services\SMSProvider\Models\SMSProviderRequest;
use Services\SMSProvider\Models\SMSProviderResponse;
use Services\SMSProvider\Provider;

class ThirdPartyProvider2 implements Provider
{
    private string $route = "http://localhost:82";
    
    public function send(NewSMSRequest $payload): SMSProviderResponse
    {

    }

    /**
     * Get the value of route
     */ 
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * Set the value of route
     *
     * @return  self
     */ 
    public function setRoute($route)
    {
        $this->route = $route;

        return $this;
    }
}