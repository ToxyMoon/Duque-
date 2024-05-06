<?php

session_start();
include 'conexao.php';
//ini_set('error_reporting', 0);

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
//$telefone = $_SESSION['telefone'];
$email = $_SESSION['email'];
//$nome = $_SESSION['nome'];


if(isset($_POST['update_profile'])){


   $update_usuario = mysqli_real_escape_string($conexao, $_POST['update_usuario']);
   $update_email = mysqli_real_escape_string($conexao, $_POST['update_email']);
   $update_senha = mysqli_real_escape_string($conexao, $_POST['update_senha']);
   $update_telefone = mysqli_real_escape_string($conexao, $_POST['update_telefone']);
   $update_nome = mysqli_real_escape_string($conexao, $_POST['update_nome']);


   mysqli_query($conexao, "UPDATE `cadastro` SET usuario = '$update_usuario', email = '$update_email', senha = '$update_senha', telefone = '$update_telefone', nome = '$update_nome' WHERE usuario = '$usuario'") or die('query failed');

   // Parte de SENHA
   // $old_pass = $_POST['old_pass'];
   // $update_pass = mysqli_real_escape_string($conexao, ($_POST['update_pass']));
   // $new_pass = mysqli_real_escape_string($conexao, ($_POST['new_pass']));
   // $confirm_pass = mysqli_real_escape_string($conexao, ($_POST['confirm_pass']));
   
   // if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)){
   //    if($update_pass == $old_pass){
   //       $message[] = 'old password not matched!';
   //    }elseif($new_pass != $confirm_pass){
   //       $message[] = 'confirm password not matched!';
   //    }else{
   //       mysqli_query($conexao, "UPDATE `cadastro` SET senha = '$confirm_pass' WHERE senha = '$senha'") or die('query failed');
   //       $message[] = 'password updated successfully!';
   //    }
   // }

   // Parte de UPLOAD de Imagens
   $update_image = $_FILES['update_image']['name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_folder = 'uploaded_img/'.$update_image;

   if(!empty($update_image)){
   if($update_image_size > 2000000){
      $message[] = 'image is too large';
   }else{
      $image_update_query = mysqli_query($conexao, "UPDATE `cadastro` SET imagem = '$update_image' WHERE usuario = '$usuario'") or die('query failed');
      if($image_update_query){
         move_uploaded_file($update_image_tmp_name, $update_image_folder);
      }
      $message[] = 'image updated successfully!';
   }
   }

}



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update profile</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="CSS/profile_user.css">

</head>
<body>
   
<div class="update-profile">


<?php
      $select = mysqli_query($conexao, "SELECT * FROM `cadastro` WHERE usuario = '$usuario'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>


   <?php
    if (isset($_SESSION['usuario'])) {
     // Acessar a variável $fetch

       $select = mysqli_query($conexao, "SELECT * FROM `cadastro` WHERE usuario = '$usuario'") or die('query failed');
       if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_array($select);
       }

       } else {
    // Mostrar uma mensagem de erro, redirecionar para a página de login, etc.
     echo "Erro, logue!";
     header('Location:login_form.php');

       }

   ?>

   <form action="" method="POST" enctype="multipart/form-data">
      
       <!-- Esse código permite que  -->
      <?php
          if($fetch['imagem'] == ''){
            echo '<img src="Arquivos-Site-TCC/images/default-avatar.png">';
          }else{
             echo '<img src="Arquivos-Site-TCC/uploaded_img/'.$fetch['imagem'].'">';
          }
          if(isset($message)){
             foreach($message as $message){
                echo '<div class="message">'.$message.'</div>';
             }
          }
      ?>
      <div class="flex">
         <div class="inputBox">
         <span>Nome de usuário:</span>
         <input type="text" name="update_usuario" value="<?php echo $fetch['usuario']; ?>" class="box">
         <span>Email:</span>
         <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" class="box">
         <span>Atualizar Foto:</span>
         <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
      </div>
      
         <div class="inputBox">
            <input type="hidden" name="old_pass">
            <span>Nome:</span>
            <input type="text" name="update_nome" placeholder="campo de nome" value="<?php echo $fetch['nome']; ?>" class="box">
            <span>Telefone</span>
            <input type="tel" name="update_telefone" placeholder="campo de telefone"  value="<?php echo $fetch['telefone']; ?>" class="box">
            <span>Senha antiga:</span>
            <input type="text" name="update_senha" placeholder="confirm new password" value="<?php echo $fetch['senha']; ?>" class="box">
         </div>
      </div>
      <input type="submit" value="Atualizar Perfil" name="update_profile" class="btn">
      <a href="index.php" class="delete-btn">Voltar</a>
   </form>

</div>

</body>
</html>