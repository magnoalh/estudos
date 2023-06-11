<?php

require_once('vendor/autoload.php');
use ApiBrasil\Service;

$bearer = "eyJ0eXAiO........................................";
$secretKey = "e3b0e....................................";
$publicToken = "28d94.............................."; 
$deviceToken = "00b.......................";
$numeroWa = "55839....................";

$response = Service::WhatsApp("sendText", [
    "Bearer" => $bearer,
    "SecretKey" => $secretKey,
    "PublicToken" => $publicToken, 
    "DeviceToken" => $deviceToken,
    "body" => [
        "number" => $numeroWa,
        "text" => "teste de API, Bem vindo ao APIBrasil"
    ]
]);

print_r($response);

//echo json_encode($response, JSON_PRETTY_PRINT);



die;

?>
