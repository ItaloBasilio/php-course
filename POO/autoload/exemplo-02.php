<?php

function incluirClasses($nomeClasse){
    if(file_exists($nomeClasse.".php") === true) {
        require_once($nomeClasse.".php");
    }
}

spl_autoload_register("incluirClasses");

spl_autoload_register(function($nomeClasse) {
    if(file_exists("Abstratas/" . $nomeClasse.".php") === true) { // Adicionei uma barra após "Abstratas"
        require_once("Abstratas/" . $nomeClasse.".php"); // Adicionei uma barra após "Abstratas"
    }
});

$carro = new DelRey();

$carro->acelerar(80);

?>
