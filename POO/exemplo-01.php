<?php

class Pessoa {
    //atributos e metodos

    //Atributo
    public $nome;

    public function falar(){//Metodo - função dentro de uma classe

        return "O meu nome é ".$this->nome;// para fazer referencia a um atributo fora do metodo

    }

}


$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();


?>