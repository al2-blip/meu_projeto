<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Conexão com o banco de dados
    $conn = new mysqli('localhost', 'root', '', 'meu_site');

    // Verifique se a conexão foi bem-sucedida
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Busque o usuário no banco de dados
    $stmt = $conn->prepare("SELECT id, hashed_password, role FROM usuarios WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        echo "Usuário encontrado: " . $user['username'] . "<br>"; // Debug

        // Verifica a senha
        if (password_verify($password, $user['hashed_password'])) {
            // Autenticação bem-sucedida
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role'];
            header('Location: dashboard.php');
            exit();
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Usuário não encontrado.";
    }

    $stmt->close();
    $conn->close();
}
?>
<form method="POST">
    Nome de Usuário: <input type="text" name="username" required><br>
    Senha: <input type="password" name="password" required><br>
    <input type="submit" value="Entrar">
</form>
