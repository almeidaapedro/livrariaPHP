<?php
    namespace php\modelo;

    class Livros{
        private string $livro1;
        private string $livro2;
        private string $livro3;
        private string $livro4;
        private string $livro5;

        public function __construct(string $livro1, string $livro2, string $livro3, string $livro4, string $livro5){
            $this->livro1 = $livro1;
            $this->livro2 = $livro2;
            $this->livro3 = $livro3;
            $this->livro4 = $livro4;
            $this->livro5 = $livro5;
        }

        public function getLivro1():string{
            return $this->livro1;
        }

        public function getLivro2():string{
            return $this->livro2;
        }

        public function getLivro3():string{
            return $this->livro3;
        }

        public function getLivro4():string{
            return $this->livro4;
        }

        public function getLivro5():string{
            return $this->livro5;
        }

        public function livros(){
            return "<br> Estoque dos Livros:".
                       "<br>A Volta Dos Que Não Foram: ".$this->getLivro1().
                       "<br>Dicas De Como Chegarla: ".$this->getLivro2().
                       "<br>Lógica De Programacao: ".$this->getLivro3().
                       "<br>Redes De Computadores: ".$this->getLivro4().
                       "<br>Harry Potter: ".$this->getLivro5();
            }
    }
?>