<?php

include_once("conexao.php");

?>

<!DOCTYPE html>
<html>
<body>


<form action="testLogin.php" method="post">
 Usuário: <input type="text" name="usuario">
 <br>
 Senha: <input type="password" name="senha">
 <br>
 Email: <input type="email" name="email">
 <input type="submit" name="submit" value="Enviar">
</form>

</body>
</html>