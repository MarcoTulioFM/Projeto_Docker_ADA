<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: POST, OPTIONS");

include 'conexao.php';

// Adicione esta linha para lidar com requisições OPTIONS, que são enviadas automaticamente pelos navegadores como parte da política CORS.
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    exit();
}

$id = rand(1, 999);
$nome = $_POST["nome"];
$email = $_POST["email"];
$comentario = $_POST["comentario"];

// Modifique o tipo de dados da coluna `comentario` para VARCHAR (ou outro tipo de texto adequado)
$query = "INSERT INTO mensagens(id, nome, email, comentario) VALUES ('$id', '$nome', '$email', '$comentario')";

if ($link->query($query) === TRUE) {
    echo "Dados Salvos com sucesso!";
} else {
    echo "Erro ao salvar os dados: " . $link->error;
}

$link->close();
?>
