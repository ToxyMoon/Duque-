<?php

session_start();
unset($_SESSION['nome']);
unset($_SESSION['usuario']);
unset($_SESSION['email']);
unset($_SESSION['senha']);
/* quando o botao "sair" e clicado, o site redireiona para outra aba, atraves desse codigo*/
header('Location:index.php');



?>