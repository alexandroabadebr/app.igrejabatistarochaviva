<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obter os dados do formulário
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    // Salvar os dados em um arquivo de texto (você pode usar um banco de dados aqui)
    $data = "Nome: $name, Telefone: $phone\n";
    file_put_contents('dados.txt', $data, FILE_APPEND);

    // Responder com um status de sucesso
    http_response_code(200);
} else {
    // Se o método de requisição não for POST, responder com erro
    http_response_code(405);
    echo 'Método não permitido';
}
?>
