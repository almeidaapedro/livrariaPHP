<?php
    namespace php\modelo;//Definir o local do projeto
    include 'usuario.php';

    $usuario = new Usuario("Pedro","Rua João","11999999999","26/06/2001","root@root.com","*******");//Instanciando
    
    echo $usuario -> login();
    echo "<br>";
    echo $usuario -> cadastro();
?>