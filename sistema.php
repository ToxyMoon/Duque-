<?php 

include("conexao.php");

session_start();

$usuario = $_SESSION['usuario'];


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Usuário</title>
</head>
<body>
 

<div class="container">

 <div class="profile">

 <?php
 /* Esse trecho permite que as informações do banco sejam exibida direto nosite */
   /*Para ser exibido diretamente, necessita desse código: <?php echo $fetch['usuario']; ?> */ 

    $select = mysqli_query($conexao, "SELECT * FROM `cadastro` WHERE usuario = '$usuario'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }


        //Fazer depois (inserir imagem no Banco!)
         if($fetch['imagem'] == ''){
            echo '<img src="imagens/user.png">';
         }else{
            echo '<img src="imagens/'.$fetch['image'].'">';
         }
      ?>

<!--exibe o nome direto do BANCO!-->
   <h3> <?php echo $fetch['usuario']; ?> </h3>
   <h3> <?php echo $fetch['email']; ?> </h3>
   <h3> <?php echo $fetch['id_usuario']; ?> </h3>
   <h3> <?php echo $fetch['senha']; ?> </h3>


   <a href="update_profile.php" class="btn">update profile</a>
      <a href="home.php?logout=<?php echo $user_id; ?>" class="delete-btn">logout</a>
      <p>new <a href="login.php">login</a> or <a href="register.php">register</a></p>


 </div>
</div>






<button class="btn_sair" onclick="window.location.href='logout.php'">SAIR</button>
</body>
</html>