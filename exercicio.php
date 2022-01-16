<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/execicio.css">
    <title>Exercício</title>
  </head>
  <body class="exercicio">
    <header class="cabecalho">
      <h1>Curso PHP</h1>
      <h2>Visualização dos Exercícios</h2>
    </header>
    <nav class="navegacao">
      <a href="#" class="verde">Sem formatação</a>
      <a href="index.html" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
      <div class="conteudo">
        <?php
            include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
        ?>
      </div>
    </main>
    <footer class="rodape">
      ALUNA <?= date('Y') ?>
    </footer>
  </body>
</html>
