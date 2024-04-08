<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Italo Basilio");
$cad->setEmail("italo@basilio.com.br");
$cad->setSenha("123456");

$cad->registrarVenda();

?>