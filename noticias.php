<?php
include_once('conexao.php');

if (!isset($_GET['id'])) {
    echo "ID da notícia não especificado";
    exit;
}

$id = $_GET['id'];

$stmt = $conexao->prepare("SELECT * FROM noticias WHERE id = :id");
$stmt->execute(['id' => $id]);
$noticia = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$noticia) {
    echo "Notícia não encontrada.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($noticia['titulo']) ?></title>

  <!-- SEO -->
  <meta name="description" content="<?= htmlspecialchars($noticia['titulo']) ?>" />
  <meta name="robots" content="index, follow" />

  <!-- Favicon -->
  <link rel="icon" href="/favicon.ico" type="image/x-icon" />

  <!-- Estilos principais -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <style>
    body {
      background-color: #f4f6f9;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #333;
    }
    header {
      background-color: #2c6e6f;
      color: #fff;
      padding: 1rem 0;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    header h1 {
      font-size: 1.75rem;
      margin: 0;
    }
    nav .nav-item {
      margin-left: 20px;
    }
    nav .nav-link {
      color: #fff !important;
      font-weight: 500;
      padding: 8px 16px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }
    nav .nav-link:hover,
    nav .nav-link.active {
      background-color: #37807e;
      text-decoration: none;
    }

    .container {
      max-width: 1200px;
      margin: 40px auto;
    }

    .news-title {
      font-size: 2.5rem;
      color: #37807e;
      margin-bottom: 20px;
    }

    .news-content {
      font-size: 18px;
      line-height: 1.6;
      color: #333;
    }

    .news-meta {
      font-size: 14px;
      color: #777;
      margin-bottom: 20px;
    }

    .back-link {
      display: inline-block;
      margin-top: 20px;
      text-decoration: none;
      color: #37807e;
      font-weight: bold;
    }

    .back-link:hover {
      text-decoration: underline;
    }

    footer {
      background-color: #2c6e6f;
      color: #fff;
      padding: 2rem 0;
      text-align: center;
    }

    footer a {
      color: #fff;
      text-decoration: none;
      font-weight: 600;
      transition: color 0.3s ease;
    }

    footer a:hover {
      color: #f4a261;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header class="py-3 shadow-sm">
    <div class="container d-flex flex-wrap justify-content-between align-items-center">
      <h1 class="h4 mb-0">
        <a href="index.php" class="text-white text-decoration-none">FEHOSPE</a>
      </h1>
      <nav>
        <ul class="nav">
          <li class="nav-item"><a class="nav-link text-white" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="quem-somos.php">Quem Somos</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="entidades.php">Entidades Associadas</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="diretoria.php">Diretoria</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="contato.php">Contato</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Conteúdo da Notícia -->
  <div class="container">
    <h2 class="news-title"><?= htmlspecialchars($noticia['titulo']) ?></h2>

    <div class="news-meta">
      <p>Publicado em: <?= date('d \d\e F \d\e Y', strtotime($noticia['data_publicacao'])) ?> | Categoria: <?= htmlspecialchars($noticia['categoria']) ?></p>
    </div>

    <div class="news-content">
      <?= $noticia['conteudo'] ?>
    </div>

    <a href="index.php" class="back-link">&larr; Voltar para o Blog</a>
  </div>

  <!-- Rodapé -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4">
          <h5>Endereço</h5>
          <p>
            <a href="https://www.google.com.br/maps/place/Empresarial+Burle+Marx/" target="_blank">
              Av. Agamenon Magalhães, 2615<br>
              Edifício Burle Marx, 4° andar - sala 406<br>
              Recife - PE, 50070-160<br>
              Brasil
            </a>
          </p>
        </div>
        <div class="col-md-4 mb-4">
          <h5>Contato</h5>
          <p><i class="bi bi-telephone-fill"></i> (81) 99999-9999</p>
          <p><i class="bi bi-envelope-fill"></i> contato@fehospe.org.br</p>
        </div>
        <div class="col-md-4 mb-4">
          <h5>Redes Sociais</h5>
          <a href="https://www.facebook.com/FEHOSPE/" class="text-white me-3"><i class="bi bi-facebook fs-4"></i></a>
          <a href="https://www.instagram.com/fehospe" class="text-white me-3"><i class="bi bi-instagram fs-4"></i></a>
          <a href="#" class="text-white"><i class="bi bi-whatsapp fs-4"></i></a>
        </div>
      </div>
      <hr style="border-color: rgba(255,255,255,0.2);">
      <a href="http://cmb.org.br">Filiada a CMB – Confederação das Santas Casas e Hospitais Filantrópicos</a>
      <p class="text-center mb-0">&copy; 2025 FEHOSPE - Todos os direitos reservados.</p>
    </div>
  </footer>
</body>
</html>
