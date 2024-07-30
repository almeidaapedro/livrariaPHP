<?php
    namespace php\modelo;

    class Livros{
        public Boolean Validar(int $login)
        {
            if ($login == 0)
            {
                return false;
            }
            else
            { 
                return true;    
            }
        }

        public int aVoltaDosQueNaoForam(){
            return 333;
        }

        public int dicasDeComoChegarla(){
            return 269;
        }

        public int logicaDeProgramacao(){
            return 100;
        }

        public int redesDeComputadores(){
            return 53;
        }

        public int harryPotter(){
            return 20;
        }
    }
?>