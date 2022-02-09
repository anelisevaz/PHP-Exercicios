<div class="titulo">Básico</div>

<h4>Precedência das Operações Aritméticas:</h4>
<p> () => ** => / * % => + - </p>
<p><small>Obs.: Operador Exponencial **</small></p>
<?php
  echo 'Exemplo de precedência: ';
  echo ((2+3)*4)*2;
   ?>
<hr>
  <h4>String:</h4>
  <?php
    var_dump("Contando os caracteres");
    echo "<br>Contatenando" . ' o texto';
    print "<br>O print também imprime";
   ?>
<hr>
   <h5>Algumas funções com string</h5>
  <?php
  echo strtoupper('maximizando');
  echo '<br>' . ucfirst('só a primeira letra');
  echo '<br>' . strlen('quantas letras?');
  echo '<br>' . strtoupper('maximizando');
  ?>
<hr>
  <h4>Conversões:</h4>
  <?php
    //int para float
    var_dump(PHP_INT_MAX+1);
    echo '<br>';
    var_dump((float)3);
    echo '<br>';
    //float para int
    var_dump((int)6.8);
    echo '<br>';
    //operações com string
    var_dump(3 +"2");

   ?>
