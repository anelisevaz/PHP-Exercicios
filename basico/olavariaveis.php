<div class="titulo">Ol� Vari�veis</div>

<h4>In�cio Vari�veis</h4>
<?php
 $a = 3;
 $b = 16;
 $somaDosNumeros = $a + $b;
 echo $somaDosNumeros;
?>

<hr>
  <h4>Setar a vari�vel:</h4>
  <?php
   echo isset($somaDosNumeros);
   unset($somaDosNumeros);
   var_dump($somaDosNumeros);
   ?>
<hr>

  <h4>Tipos din�micos (tipagem fraca):</h4>
  <?php
   $variavel = 10;
   echo '<br>'.$variavel;
   $variavel = "Agora sou string";
   echo '<br>'.$variavel;
   ?>
<hr>

  <h4>Interpola��o:</h4>
  <?php
	$numero = 10;
	echo '<br> $numero';
	echo "<br> $numero";
	?>
<hr>

  <h4>Vari�veis Vari�veis</h4>
  <?php
  	$a = 'valorA';
  	$$a = 'valorAA';
  	echo "$a {$$a} ${$a} $valorA";
  	echo '<br>';
  	$epa = 'opa';
	$opa = 'vish';
	$vish = 'eita!';
	echo "$epa {$$epa} {$$$epa}";
	?>
<hr>

  <h4>Valor X Refer�ncia</h4>
  <?php
  $variavel = 'valor inicial';
  echo $variavel;
  
  //Atriui��o por valor (gera c�pias independentes para usar)
  $variavelValor = $variavel;
  echo "<br>$variavelValor";
  $variavelValor = 'novo valor';
  echo "<br>$variavel";
  echo " $variavelValor";

  //Atribui��o por Refer�ncia (com a mesma referencia de mem�ria)
  $variavelReferencia = &$variavel;
  $variavelReferencia = 'mesma referencia';
  echo "<br>$variavel $variavelReferencia";

	?>
<hr>

 <h4>Constantes</h4>
  <?php
  define('TAXA_DE_JUROS', 5.9);
  echo TAXA_DE_JUROS;
  echo '<br>';
  const NOVA_TAXA = 2.5;
  echo '<br>' . NOVA_TAXA;
  echo '<br>' . PHP_VERSION;
  echo '<br> Linha:' . __LINE__;
  echo '<br> Arquivo:' . __FILE__;
  echo '<br> Diret�rio:' . __DIR__;
	?>
<hr>