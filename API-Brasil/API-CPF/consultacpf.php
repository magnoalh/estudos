<?php

//COMEÇA AQUI

// Receber o corpo da requisição HTTP POST
$requestBody = file_get_contents('php://input');

// Decodificar o JSON recebido
$data = json_decode($requestBody, true);

// Verificar se a decodificação do JSON foi bem-sucedida
    
    $cpf = $data['cpf'];

//TERMINA AQUI

// Dados da requisição
$endpoint = 'https://cluster.apigratis.com/api/v1/dados/cpf';
$secretKey = 'z3e01c0d-..............................';
$publicToken = 'd41d8.........................................................';
$deviceToken = '41b5e5b7-.....................................................';
$authorization = 'eyJ0eXAiOi........................................................................................................................';

// Montar o corpo da requisição
$data = array(
    'cpf' => $cpf
);

// Configurar os headers da requisição
$headers = array(
    'Content-Type: application/json',
    'SecretKey: ' . $secretKey,
    'PublicToken: ' . $publicToken,
    'DeviceToken: ' . $deviceToken,
    'Authorization: Bearer ' . $authorization
);

// Configurar o contexto do fluxo
$context = stream_context_create(array(
    'http' => array(
        'method' => 'POST',
        'header' => implode("\r\n", $headers),
        'content' => json_encode($data)
    )
));

// Fazer a requisição e obter a resposta
$response = file_get_contents($endpoint, false, $context);

print_r($response);

// Verificar se ocorreu algum erro na requisição
if ($response === false) {
    echo "Erro na requisição: " . error_get_last()['message'];
} else {
    echo "Consulta feita com sucesso!";
}

?>
