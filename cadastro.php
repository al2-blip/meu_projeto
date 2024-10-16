<?php
// Exemplo para cadastrar um novo usuário
$username = 'usuario_teste';
$password = 'senha_secreta'; // Use uma senha forte

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Conexão com o banco de dados
$conn = new mysqli('localhost', 'root', '', 'meu_site');

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Inserir o novo usuário
$stmt = $conn->prepare("INSERT INTO usuarios (username, hashed_password, role) VALUES (?, ?, ?)");
$role = 'usuario'; // ou 'admin'
$stmt->bind_param("sss", $username, $hashed_password, $role);

if ($stmt->execute()) {
    echo "Usuário cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar usuário: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
