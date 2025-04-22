<?php
session_start();
include('conexao.php');

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["documento"])) {
    $arquivo = $_FILES["documento"];
    $destino = "uploads/" . basename($arquivo["name"]);
    $usuario_id = $_SESSION['usuario_id'];

    if (move_uploaded_file($arquivo["tmp_name"], $destino)) {
        $sql = "INSERT INTO documentos (usuario_id, nome_arquivo, caminho) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iss", $usuario_id, $arquivo["name"], $destino);
        $stmt->execute();
        $mensagem = "Documento enviado com sucesso!";
    } else {
        $mensagem = "Erro ao enviar o documento.";
    }
}
?>
<?php include('includes/header.php'); ?>
<main>
    <h2>Enviar Documento</h2>
    <p><?php echo $mensagem; ?></p>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="documento" required>
        <input type="submit" value="Enviar">
    </form>
</main>
<?php include('includes/footer.php'); ?>