<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Guia de Turismo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.html">Início</a></li>
            <li><a href="destinos.html">Destinos</a></li>
            <li><a href="gastronomia.html">Gastronomia</a></li>
            <li><a href="sobre.html">Sobre Nós</a></li>
            <li><a href="contato.php">Contato</a></li>
        </ul>
    </nav>

    <h1>Fale Conosco</h1>
    <form action="processa_contato.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" rows="4" required></textarea>

        <button type="submit">Enviar</button>
    </form>

    <footer>
        <p>&copy; 2024 Guia de Turismo. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
