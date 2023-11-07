<?php
// Recebe os dados da URL
$nome = $_GET['nome'];
$telefone = $_GET['telefone'];

// Lógica para salvar os dados em um arquivo
$file = '../dados.txt';
$data = "$nome, $telefone\n";

// Abre o arquivo em modo de escrita e adiciona os dados
if (file_put_contents($file, $data, FILE_APPEND) !== false) {
    // Define as permissões do arquivo (por exemplo, 0644 para permissões de leitura e gravação para o proprietário e leitura para outros)
    chmod($file, 0644);

    // Envia uma resposta de sucesso
    $response = array('success' => true, 'message' => 'Dados salvos com sucesso!');
    echo json_encode($response);
} else {
    // Envia uma resposta de erro se a escrita falhar
    $response = array('success' => false, 'message' => 'Erro ao salvar dados.');
    echo json_encode($response);
}
?>

