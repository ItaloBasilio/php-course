<?php

// Organizar o proprio codigo
// Quando se trabalha com outros programadores
// Quando o codigo ira comunicar com sistemas terceiros

abstract class Animal {

    public function falar(){

        return "Som";

    }

    public function mover(){

        return "Anda";

    }

}


class Cachorro extends Animal{

    public function falar(){

        return "Late";

    }   

}

class Gato extends Animal {

    public function falar(){

        return "Mia";

    }  

}

class Passaro extends Animal {

    public function falar(){

        return "Canta";

    } 
    
    public function mover()
    {
        return "Voa e " .  parent::mover();
    }

}

echo "Cachorro <br/><br/>";

$pluto = new Cachorro();
echo $pluto->falar() . "<br/>";
echo $pluto->mover(). "<br/>";

echo "------------------------------------------------<br/>";

echo "Gato <br/><br/>";

$garfield = new Gato();
echo $garfield->falar() . "<br/>";
echo $garfield->mover(). "<br/>";

echo "------------------------------------------------<br/>";

echo "Passaro <br/><br/>";

$piu = new Passaro();
echo $piu->falar() . "<br/>";
echo $piu->mover(). "<br/>";

echo "------------------------------------------------<br/>";

?>