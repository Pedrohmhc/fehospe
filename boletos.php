<?php
session_start();
include('conexao.php');

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}

$usuario_id = $_SESSION['usuario_id'];
$sql = "SELECT * FROM documentos WHERE usuario_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $usuario_id);
$stmt->execute();
$result = $stmt->get_result();
?>
<?php include('includes/header.php'); ?>
<main>
    <h2>Seus Boletos e Documentos</h2>
    <ul>
        <?php while ($doc = $result->fetch_assoc()): ?>
            <li>
                <?php echo $doc['nome_arquivo']; ?>
                - <a href="<?php echo $doc['caminho']; ?>" download>Baixar</a>
            </li>
        <?php endwhile; ?>
    </ul>
</main>
<?php include('includes/footer.php'); ?>