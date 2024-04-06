<?php

//metodos magicos __ ( underline, underline) é um método mágico
//metodo construtor é ativado automaticamente

class Endereco{

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b , $c){
        
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __destruct(){

        // var_dump("DESTRUIR");
        
    }

    public function __toString()
    {
        return $this->logradouro . ", " .$this->numero." - ". $this->cidade;
    }



}

$meuEndereco = new Endereco("Rua Americo Vespucio", "123", "Hortolandia");

echo $meuEndereco;



?>