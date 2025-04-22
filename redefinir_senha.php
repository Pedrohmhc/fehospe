<?php
include('conexao.php');
$token = $_GET['token'] ?? '';
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nova_senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $token = $_POST['token'];

    $stmt = $conn->prepare("SELECT email FROM tokens_recuperacao WHERE token = ? AND expira_em > NOW()");
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $email = $resultado->fetch_assoc()['email'];
        $stmt = $conn->prepare("UPDATE associados SET senha = ? WHERE email = ?");
        $stmt->bind_param("ss", $nova_senha, $email);
        $stmt->execute();

        $mensagem = "Senha atualizada com sucesso!";
    } else {
        $mensagem = "Token inválido ou expirado.";
    }
}
?>
<?php include('includes/header.php'); ?>
<main>
    <h2>Redefinir Senha</h2>
    <p><?php echo $mensagem; ?></p>
    <form method="POST">
        <input type="hidden" name="token" value="<?php echo htmlspecialchars($token); ?>">
        <label>Nova Senha:</label><br>
        <input type="password" name="senha" required><br><br>
        <input type="submit" value="Atualizar Senha">
    </form>
</main>
<?php include('includes/footer.php'); ?>