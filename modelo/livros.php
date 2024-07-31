<?php
    namespace php\modelo;

    class Livros{
        public int aVoltaDosQueNaoForam(){
            return "333 livros";        
        }

        public int dicasDeComoChegarla(){
            return "269";
        }

        public int logicaDeProgramacao(){
            return "100";
        }

        public int redesDeComputadores(){
            return "53";
        }

        public int harryPotter(){
            return "20";
        }

        public function livros(){
            return "<br> Estoque dos Livros:".
                       "<br>A Volta Dos Que Não Foram: ".$this->aVoltaDosQueNaoForam().
                       "<br>Dicas De Como Chegarla: ".$this->dicasDeComoChegarla().
                       "<br>Lógica De Programacao: ".$this->logicaDeProgramacao().
                       "<br>Redes De Computadores: ".$this->redesDeComputadores().
                       "<br>Harry Potter: ".$this->harryPotter();
            }
    }
?>