<?php

use Symfony\Component\Routing;
use Symfony\Component\Routing\Loader\Configurator\RouteConfigurator;
use Controllers;
use Controllers\ReportController;
use Controllers\SMSController;

function createRouter(RouteConfigurator $router) {
    $router->add("send", "/v1/send")->controller([SMSController::class, "send"])->methods(["get"]);
    $router->add("report", "/v1/report")->controller([ReportController::class, "report"])->methods(["get"]);
}



