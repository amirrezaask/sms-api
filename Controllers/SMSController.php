<?php

namespace Controllers;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SMSController 
{
    public function send(): Response 
    {
        $request = Request::createFromGlobals();
        $request->query->get("")
    }
}