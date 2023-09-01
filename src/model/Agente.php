<?php
    namespace App\model;

    class Agente {
        public $nome, $antec , $classe, $idade, $genero;

        function __construct($nome, $antec, $classe, $idade, $genero){
            $this->nome = $nome;
            $this->antec = $antec;
            $this->classe = $classe;
            $this->idade = $idade;
            $this->genero = $genero;
        }

        public function mostrarFichaAOP() {
            echo "<p class='aop'> Nome: " . $this->nome . "<br>";
            echo "Antecedente: " . $this->antec . "<br>";
            echo "Classe: " . $this->classe . "<br>";
            echo "Idade: " . $this->idade . " anos <br>";
            echo "Gênero: " . $this->genero . "<br></p>";
        }
    }
?>