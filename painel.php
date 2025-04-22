<?php include_once 'config/init.php'; ?>
<?php include_once 'includes/header.php'; ?>

<?php
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}
include('conexao.php');

$sql = "SELECT mensagem FROM avisos ORDER BY criado_em DESC LIMIT 5";
$result = $conn->query($sql);
?>
<?php include('includes/header.php'); ?>
<main>
    <h2>Bem-vindo, <?php echo $_SESSION['usuario_nome']; ?>!</h2>
    <h3>Últimos Avisos:</h3>
    <ul>
        <?php while ($aviso = $result->fetch_assoc()): ?>
            <li><?php echo $aviso['mensagem']; ?></li>
        <?php endwhile; ?>
    </ul>
</main>
<?php include('includes/footer.php'); ?>