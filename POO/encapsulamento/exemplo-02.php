<?php

//encapçulamento - Quem pode acessar
//Privado nao herda

class Pessoa{

    public $nome = "Rasmus Lerdorf";
    protected $idade = 48;
    private $senha = "123456";

    //Esse metodo tem acesso a senha, pois ele esta dentro da mesma classe
    public function verDados(){

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";

    }

}

class Programador extends Pessoa{

    public function verDados(){

        echo get_class($this) . "<br/>";

        
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";// neste caso, conseguimos acessar a idade, pois é protected , e o mesmo aceita herança
        echo $this->senha . "<br/>";// Neste caso, nao conseguimos ter acesso a senha, pois é privada de outra classe

    }

}

$objeto = new Programador();

// echo $objeto->senha . "<br/>";

$objeto->verDados();


?>