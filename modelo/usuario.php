<?php 
    namespace php\modelo;

    class Usuario{
        private string $nome;
        private string $endereco;
        private string $telefone;
        private string $dataDeNascimento;
        private string $login;
        private string $senha;

        public function __construct(string $nome, string $endereco, string $telefone, string $dataDeNascimento, string $login, string $senha){
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->telefone = $telefone;
            $this->dataDeNascimento = $dataDeNascimento;
            $this->login = $login;
            $this->senha = $senha;
        }//fim do construtor
        
        public function getNome():string{
            return $this->nome;
        }

        public function getEndereco():string{
            return $this->endereco;
        }

        public function getTelefone():string{
            return $this->telefone;
        }

        public function getDataDeNascimento():string{
            return $this->dataDeNascimento;
        }

        public function getLogin():string{
            return $this->login;
        }

        public function getSenha():string{
            return $this->senha;
        }

        public function setNome(string $nome):void{
            $this->nome = $nome;
        }

        public function setEndereco(string $endereco):void{
            $this->endereco = $endereco;
        }

        public function setTelefone(string $telefone):void{
            $this->telefone = $telefone;
        }

        public function setDataDeNascimento(string $dataDeNascimento):void{
            $this->dataDeNasimento = $dataDeNascimento;
        }

        public function setLogin(string $login):void{
            $this->login = $login;
        }

        public function setSenha(string $senha):void{
            $this->senha = $senha;
        }

        public function cadastro():string{
            return "<br>Faça seu cadastro abaixo:".
                   "<br>Nome: ".$this->getNome().
                   "<br>Endereço: ".$this->getEndereco().
                   "<br>Telefone: ".$this->getTelefone().
                   "<br>Data de Nascimento: ".$this->getDataDeNascimento().
                   "<br>Email: ".$this->getLogin().
                   "<br>Senha: ".$this->getSenha();
        }

        public function login():string{
            return "<br> Faça seu login:  <br>".
                   "<br>Email: ".$this->getLogin().
                   "<br>Senha: ".$this->getSenha();
        }

        public function Catalogo():int{
            return "<br><br> -- Catálogo de Livros -- <br><br>".
                   "1. A Volta dos que não foram".
                   "2. Dicas de como chegar lá".
                   "3. Lógica de Programação".
                   "4. Redes de Computadores".
                   "5. Harry Potter";
        }
    }
?>