<?php
    namespace App\model;

    class Criatura {
        public $nome, $raca, $antec, $classe, $idade, $genero;

        function __construct($nome, $raca, $antec, $classe, $idade, $genero){
            $this->nome = $nome;
            $this->raca = $raca;
            $this->antec = $antec;
            $this->classe = $classe;
            $this->idade = $idade;
            $this->genero = $genero;
        }

        public function mostrarFichaDnD() {
            echo "<p class='dnd'>Nome: " . $this->nome . "<br>";
            echo "Raça: " . $this->raca . "<br>";
            echo "Antecedente: " . $this->antec . "<br>";
            echo "Classe: " . $this->classe . "<br>";
            echo "Idade: " . $this->idade . " anos <br>";
            echo "Gênero: " . $this->genero . "<br></p>";
        }
    }
?>