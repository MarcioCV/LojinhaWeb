<?php
    include_once("Login.php");

    $usuario = new Login($_REQUEST["Usuario"] ,$_REQUEST["Senha"] );

    $conn = mysqli_connect('localhost','root','','lojinha');

    //echo "<h2>".$usuario->getLogin()."</h2>";
    //echo "SELECT login,senha FROM usuarios where login = '" . $usuario->getLogin() . "' AND senha ='" . $usuario->getSenha() . "'";

    $string_login = $conn->query("SELECT login,senha FROM usuarios where login = '" . $usuario->getLogin() . "' AND senha ='" . $usuario->getSenha() . "'"); 
   
    if($string_login != NULL){
        header("Location: http://localhost/Loginhaweb/oi.html");
    }
?> 