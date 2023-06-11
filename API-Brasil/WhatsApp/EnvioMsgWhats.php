<?php
//exemplo de envio de mensagem pela APIBRASIL para o Whatsapp no PHP usando a CLASSE ApiBrasil
// lembrando que para usar o serviço tem que se cadastrar no site e pegar as informações necessarias.

require_once('vendor/autoload.php');
use ApiBrasil\Service;

$bearer = "eyJ0eXAi..............................."; // trocar Bearer
$secretKey = "e3b0....................."; //trocar secretkey
$publicToken = "28d9........................";  //trocar publictoken 
$deviceToken = "00bd.........................."; // trocar devicetoken
$numeroWa = "55839..............";

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


die;

?>
