<?php

$minhaIdade = 32;

$idadeCrianca = 12;
$idadeMaior = 18;
$melhorIdade = 65;

if($idadeCrianca <= $idadeMaior){
    echo "Adulto";

}else if($idadeCrianca < 15 ){
    echo "Criança";
}

echo "<br/>";

//operador ternario
echo ($minhaIdade < $idadeMaior ) ? "menor de idade" : "Maior de idade"

?>