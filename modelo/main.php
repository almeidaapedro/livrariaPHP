<?php
    namespace php\modelo;//Definir o local do projeto
    include 'usuario.php';
    include 'livros.php';

    $usuario = new Usuario("Pedro","Rua João","11999999999","26/06/2001","root@root.com","*******");//Instanciando

    $livro1 = new Livros("333","269","100","53","20");
    
    echo $usuario -> login();
    echo "<br>";
    echo $usuario -> cadastro();
    echo "<br>";
    echo $livro1 -> livros();
?>