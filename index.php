<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <title>Curso PHP</title>
  </head>
  <body>
    <header class="cabecalho">
      <h1>Curso PHP</h1>
      <h2>Índice dos exercícios</h2>
    </header>
    
    <main class="principal">
      <div class="conteudo">
        <nav class="modulos">
        
        <div class="modulo vermelho">
              <h3>2. Controle</h3>
              <ul>
                <li>
                  <a href="exercicio.php?dir=controle&file=if_else.php">
                    If Else
                  </a>
                </li>
              </ul>
         </div>
        
          <div class="modulo verde">
              <h3>1. Básico</h3>
              <ul>
                <li>
                  <a href="exercicio.php?dir=basico&file=olamundo">
                    Olá Mundo
                  </a>
                </li>
                <li>
                  <a href="exercicio.php?dir=basico&file=olavariaveis">
                    Olá Variáveis
                  </a>
                </li>
              </ul>
          </div>
  
        </nav>
      </div>
    </main>
    <footer class="rodape">
      ALUNA <?= date('Y') ?>
    </footer>
  </body>
</html>
