<?php

function carregarClasse($nomeClasse){
    var_dump($nomeClasse);
    require_once("$nomeClasse.php");
}

spl_autoload_register('carregarClasse');



$carro = new DelRey();

$carro->acelerar(80);

?>
