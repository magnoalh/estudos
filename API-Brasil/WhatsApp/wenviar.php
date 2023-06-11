<?php
// Envio de mensagem pelo API-BRASIL WhatsappSend - faça seu cadastro no API-BRASIL Para usar .
//Usando a Linguagem PHP file_get_contents
// Dados da requisição
$endpoint = 'https://cluster.apigratis.com/api/v1/whatsapp/sendText';
$secretKey = 'e3b0.............................................';  //troque pela sua SecretKey
$publicToken = '28d9...............................'; //troque pela sua publicToken
$deviceToken = '00bd.................................................'; //troque pela sua deviceToken
$authorization = 'eyJ0eXAiOi..............................................'; //troque pela sua authorization Bearer

// Dados da mensagem
$number = '55839.........';  //coloque o numero de whatsApp que deseja enviar .
$text = 'Top, APIGRATIS! Que massa.';
$timeTyping = 1;

// Montar o corpo da requisição
$data = array(
    'number' => $number,
    'text' => $text,
    'time_typing' => $timeTyping
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
    echo "Mensagem enviada com sucesso!";
}

?>
