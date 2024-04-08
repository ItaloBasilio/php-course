<?php

// Organizar o proprio codigo
// Quando se trabalha com outros programadores
// Quando o codigo ira comunicar com sistemas terceiros

interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}


class Civic implements Veiculo {

    public function acelerar($velocidade)
    {
        echo "O veiculo acelerou até ". $velocidade . "Km/h";
    }

    public function frenar( $velocidade ) 
    {
        echo "O veiculo frenou até ". $velocidade . "Km/h";
    }

    public function trocarMarcha($marcha)
    {
        echo "O veiculo engatou a marcha ". $marcha;
    }

}

$carro = new Civic();

$carro->trocarMarcha(1);

?>