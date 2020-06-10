<?php


namespace Services\SMSProvider\Providers;

use Models\Requests\NewSMSRequest;
use Services\SMSProvider\Models\SMSProviderRequest;
use Services\SMSProvider\Models\SMSProviderResponse;
use Services\SMSProvider\SMSProvider as SMSProviderSMSProvider;
use Services\SMSProvider\Provider;

class ThirdPartyProvider1 implements Provider
{
    private string $route = "http://localhost:81";
    
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