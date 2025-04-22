<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contato - FEHOSPE</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
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
    footer {
      background-color: #37807e;
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
    @media (max-width: 768px) {
      header h1 {
        font-size: 1.5rem;
      }
    }
  </style>
</head>
<body>
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

  <main class="container py-5">
    <h2>Fale Conosco</h2>
    <form action="#" method="post" class="mt-4">
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="assunto" class="form-label">Assunto</label>
        <input type="text" class="form-control" id="assunto" name="assunto">
      </div>
      <div class="mb-3">
        <label for="mensagem" class="form-label">Mensagem</label>
        <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </main>

  <!-- Rodapé -->
  <footer style="background-color: #37807e; color: #fff; padding: 2rem 0;">
    <div class="container">
      <div class="row">
  
        <!-- Endereço -->
        <div class="col-md-4 mb-4">
          <h5 style="color: #fff;">Endereço</h5>
          <a href = https://www.google.com.br/maps/place/Empresarial+Burle+Marx/@-8.045809,-34.8906564,16.25z/data=!4m6!3m5!1s0x7ab193865792c5f:0x6a51f47610fcb86e!8m2!3d-8.046106!4d-34.8902188!16s%2Fg%2F11jyqjq2zm?entry=ttu&g_ep=EgoyMDI1MDQxNi4xIKXMDSoASAFQAw%3D%3D>
            Av. Agamenon Magalhães, 2615 <br>
            Edifício Burle Marx, 4° andar - sala 406 <br>
            Recife - PE, 50070-160<br>
            Brasil
          </a>
        </div>
  
        <!-- Contato -->
        <div class="col-md-4 mb-4">
          <h5 style="color: #fff;">Contato</h5>
          <p><i class="bi bi-telephone-fill"></i> (81) 99999-9999</p>
          <p><i class="bi bi-envelope-fill"></i> contato@fehospe.org.br</p>
        </div>
  
        <!-- Redes Sociais -->
        <div class="col-md-4 mb-4">
          <h5 style="color: #fff;">Redes Sociais</h5>
          <a href="https://www.facebook.com/FEHOSPE/?locale=pt_BR" class="text-white me-3"><i class="bi bi-facebook fs-4"></i></a>
          <a href="https://www.instagram.com/fehospe?igsh=MXd0dTZsd2g4enR4cA==" class="text-white me-3"><i class="bi bi-instagram fs-4"></i></a>
          <a href="#" class="text-white"><i class="bi bi-whatsapp fs-4"></i></a>
        </div>
  
      </div>
      <hr style="border-color: rgba(255,255,255,0.2);">
      <a href="http://cmb.org.br">Filiada a CMB – Confederação das Santas Casas e Hospitais Filantrópicos</a>
      <p class="text-center mb-0" style="color: #fff;">&copy; 2025 FEHOSPE - Todos os direitos reservados.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
