<?php

$nome = "Italo";

function teste()
{
    global $nome;
    echo $nome." ". "( Teste 1 com global $ )";
}

teste($nome);

echo "<br/>";
echo "<br/>";

function teste2($nome)
{
    echo $nome . " " . "( Teste 2 - Estamos passando a variavel dentro dos parenteses da função )";
}

teste2($nome);
