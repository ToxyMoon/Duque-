<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "banco_tcc";


$conexao = new mysqli($hostname, $username, $password, $database);

if ($conexao->connect_error){

    echo "Erro";
}

else
{
   echo "Conexao Efetuada - OK";
}
?>
