<?php
include('conexao.php');

$nome = "João da Silva";
$email = "joao@email.com";
$senha = password_hash("123456", PASSWORD_DEFAULT);

$sql = "INSERT INTO associados (nome, email, senha) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nome, $email, $senha);
$stmt->execute();

echo "Usuário criado com sucesso!";
?>