<?php
include('conexao.php');
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO associados (nome, email, senha) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email, $senha);
    if ($stmt->execute()) {
        $mensagem = "Cadastro realizado com sucesso!";
    } else {
        $mensagem = "Erro ao cadastrar. Tente outro e-mail.";
    }
}
?>
<?php include('includes/header.php'); ?>
<main>
    <h2>Cadastro de Associado</h2>
    <p><?php echo $mensagem; ?></p>
    <form method="POST">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br>
        <label>Email:</label><br>
        <input type="email" name="email" required><br>
        <label>Senha:</label><br>
        <input type="password" name="senha" required><br><br>
        <input type="submit" value="Cadastrar">
    </form>
</main>
<?php include('includes/footer.php'); ?>