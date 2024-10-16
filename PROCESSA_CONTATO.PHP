<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar e limpar os dados do formulário
    $nome = htmlspecialchars(trim($_POST['nome']));
    $email = htmlspecialchars(trim($_POST['email']));
    $mensagem = htmlspecialchars(trim($_POST['mensagem']));

    // Validar se os campos estão preenchidos
    if (empty($nome) || empty($email) || empty($mensagem)) {
        echo "Por favor, preencha todos os campos.";
        exit;
    }

    // Aqui você pode enviar um e-mail, armazenar no banco de dados, etc.
    $to = "alvarofrancisconhanha2@.com"; // Substitua pelo seu e-mail
    $subject = "Nova mensagem de contato";
    $body = "Nome: $nome\nEmail: $email\nMensagem:\n$mensagem";
    $headers = "From: $email\r\n";

    // Enviar o e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem. Tente novamente mais tarde.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
