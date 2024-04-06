<?php

// Definindo uma classe chamada Carro
class Carro{

    // Atributos privados da classe Carro
    private $modelo;
    private $motor;
    private $ano;

    // Método para obter o valor do atributo modelo
    public function getModelo(){
        return $this->modelo; // Retorna o valor do atributo modelo
    }

    // Método para definir o valor do atributo modelo
    public function setModelo($modelo){
        $this->modelo = $modelo; // Define o valor do atributo modelo
    }

    // Método para obter o valor do atributo motor
    public function getMotor():float{
        return $this->motor; // Retorna o valor do atributo motor
    }

    // Método para definir o valor do atributo motor
    public function setMotor($motor){
        $this->motor = $motor; // Define o valor do atributo motor
    }

    // Método para obter o valor do atributo ano
    public function getAno():int {
        return $this->ano; // Retorna o valor do atributo ano
    }

    // Método para definir o valor do atributo ano
    public function setAno($ano){
        $this->ano = $ano; // Define o valor do atributo ano
    }

    // Método para exibir as informações do carro
    public function exibir(){
        return array(
            "modelo"=>$this->getModelo(), // Obtém o modelo do carro
            "motor"=>$this->getMotor(),   // Obtém o motor do carro
            "ano"=>$this->getAno()        // Obtém o ano do carro
        );
    }
}

// Criando uma instância da classe Carro
$gol = new Carro();

// Definindo os atributos do carro Gol
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2024");

// Exibindo as informações do carro Gol
var_dump($gol->exibir());

?>
