<?php

namespace Services\SMSProvider\Models;


class SMSProviderRequest 
{
    private string $body;
    private string $number;

    public function SMSProviderRequest(string $body, $number) 
    {
        $this->body = $body;
        $this->number = $number;
    }
    

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of body
     */ 
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set the value of body
     *
     * @return  self
     */ 
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }
}