<?php

require_once('vendor/autoload.php');
use ApiBrasil\Service;

$bearer = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczovL3BsYXRhZm9ybWEuYXBpYnJhc2lsLmNvbS5ici9hdXRoL2xvZ2luIiwiaWF0IjoxNjg2MDkyNjI0LCJleHAiOjE3MTc2Mjg2MjQsIm5iZiI6MTY4NjA5MjYyNCwianRpIjoieDUwWFNFV25PM3pBaVRaeiIsInN1YiI6IjMzNDUiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.eM5Shi-A9SKvFtu6dcijUsGNReNXeebc0jgREaWLwGc";
$secretKey = "e3b0e4b8-7670-47b6-8543-47f869ccc90e";
$publicToken = "28d94d7e-80fd-462f-9761-0015337fef1f"; 
$deviceToken = "00bd134b-e3c5-4671-be27-1d9b8ca4c4bf";
$numeroWa = "5583988596239";

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
