<div class="titulo">B�sico</div>

<h4>Preced�ncia das Opera��es Aritm�ticas:</h4>
<p> () => ** => / * % => + - </p>
<p><small>Obs.: Operador Exponencial **</small></p>
<?php
  echo 'Exemplo de preced�ncia: ';
  echo ((2+3)*4)*2;
   ?>
<hr>
  <h4>String:</h4>
  <?php
    var_dump("Contando os caracteres");
    echo "<br>Contatenando" . ' o texto';
    print "<br>O print tamb�m imprime";
   ?>
<hr>
   <h5>Algumas fun��es com string</h5>
  <?php
  echo strtoupper('maximizando');
  echo '<br>' . ucfirst('s� a primeira letra');
  echo '<br>' . strlen('quantas letras?');
  echo '<br>' . strtoupper('maximizando');
  ?>
<hr>
  <h4>Convers�es:</h4>
  <?php
    //int para float
    var_dump(PHP_INT_MAX+1);
    echo '<br>';
    var_dump((float)3);
    echo '<br>';
    //float para int
    var_dump((int)6.8);
    echo '<br>';
    //opera��es com string
    var_dump(3 +"2");

   ?>
