<?php
// arquivo em PHP usando file_get_contents para login e requisição da bearer na plataforma APIBRASIL
// Dados da requisição
$endpoint = 'https://cluster.apigratis.com/api/v1/login';
$email = 'aaaa@aaaaa.aaa';  // seu email de cadastro
$password = 'aaaaaaaaaaaaaa'; // sua senha 

// Montar o corpo da requisição
$data = array(
    'email' => $email,
    'password' => $password
);

// Configurar os headers da requisição
$headers = array(
    'Content-Type: application/json'
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

// Verificar se ocorreu algum erro na requisição
if ($response === false) {
    echo "Erro na requisição: " . error_get_last()['message'];
} else {
    // Decodificar a resposta JSON
    $responseData = json_decode($response, true);

print_r($responseData);
echo "<br/>";
    
    // Verificar se o token foi retornado com sucesso
    if (isset($responseData['authorization']['token'])) {
        $token = $responseData['authorization']['token'];
        echo "Token: " . $token;
    } else {
        echo "Erro ao obter o token: " . $responseData['error'];
    }
}

?>
