<?php
include('conexao.php');
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $token = bin2hex(random_bytes(16));
    $expira_em = date("Y-m-d H:i:s", strtotime("+1 hour"));

    $sql = "INSERT INTO tokens_recuperacao (email, token, expira_em) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $email, $token, $expira_em);
    $stmt->execute();

    // Simulação do envio
    $link = "http://localhost/fehospe/redefinir_senha.php?token=$token";
    $mensagem = "Link de recuperação: <a href='$link'>$link</a>";
}
?>
<?php include('includes/header.php'); ?>
<main>
    <h2>Recuperar Senha</h2>
    <p><?php echo $mensagem; ?></p>
    <form method="POST">
        <label>E-mail:</label><br>
        <input type="email" name="email" required><br><br>
        <input type="submit" value="Enviar link">
    </form>
</main>
<?php include('includes/footer.php'); ?>