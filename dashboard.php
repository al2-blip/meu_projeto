<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
?>
<h1>Painel de Controle</h1>
<p>Bem-vindo, <?php echo $_SESSION['role']; ?>!</p>

<?php if ($_SESSION['role'] === 'admin'): ?>
    <h2>Acesso de Administrador</h2>
    <p>Você tem acesso a recursos de administrador.</p>
<?php endif; ?>

<a href="logout.php">Sair</a>
