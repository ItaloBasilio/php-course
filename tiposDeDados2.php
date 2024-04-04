<?php

//tipos basicos de dados

$nome = "Hcode";
$site = 'www.hcode.com.br';

$ano = 1990;
$salario = 9900.99;
$bloqueado = false;
/////////////////////////////////////////////////////////////////////

//Tipo composto
$frutas = array("abacaxi", "laranja","manga");

echo $frutas[2];

echo "<br/>";
echo "<br/>";

//Objeto

$nascimento = new DateTime();

var_dump($nascimento);

echo "<br/>";
echo "<br/>";

////////////////////////////////////////////////////////////////////
// Tipos especiais

$arquivo = fopen("concatenacao.php", "r");

var_dump($arquivo);

///////////////////////////////////////////////////////////////////
// Nulo e vazio

$nulo = NULL; 

?>