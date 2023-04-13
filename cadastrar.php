<?php

require_once("conexao.php");

$table = "usuarios";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$senha_criptografada = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO $table (nome, email, senha) VALUES ('$nome', '$email', '$senha_criptografada')";

if (mysqli_query($conn, $sql)) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . mysqli_error($conn);
}

mysqli_close($conn);

?>
