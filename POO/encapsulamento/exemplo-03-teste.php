<?php

// Definição da classe Cursos
class Cursos{
    // Propriedade pública (acessível fora da classe)
    public $nome = "Analise e Desenvolvimento de sistemas";
    
    // Propriedade protegida (acessível apenas dentro da classe e por classes filhas)
    protected $duracao = 3250;
    
    // Propriedade privada (acessível apenas dentro da classe)
    private $senha = "123456";

    // Método público Aluno
    public function Aluno(){
        // Imprime o nome do curso
        echo $this->nome . "<br/>";
        // Imprime a duração do curso
        echo $this->duracao . "<br/>";
        // Imprime a senha do curso (não é uma boa prática expor senhas assim)
        echo $this->senha . "<br/>";
    }

    // Método público para obter a duração do curso
    public function getDuracao() {
        return $this->duracao; // Retorna a duração do curso
    }
}

// Instância da classe Cursos
$objeto = new Cursos();

// Chama o método getDuracao() para obter e imprimir a duração do curso
echo $objeto->getDuracao() . "<br>";

?>
