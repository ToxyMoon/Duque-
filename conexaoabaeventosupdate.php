<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "criar_evento";


$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error){

    echo "Erro";
}

else
{
 // echo "conectado com sucesso"; 
}
?>

conexaoabaeventosupdate.php