<?php
    session_start();

    print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('conexao.php');
        $usuario = $_POST['usuario'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        print_r('Usuario: ' . $usuario);
        print_r('Email: ' . $email);
        print_r('<br>');
        print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM cadastro WHERE usuario = '$usuario' and email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        if($result === false)
        {
            echo "Error: " . $sql . "<br>" . $conexao->error;
        }
        else
        {
            if(mysqli_num_rows($result) < 1){
            
                unset($_SESSION['usuario']);
                unset($_SESSION['email']);
                unset($_SESSION['senha']);
                header('Location:login_form.php');
            
          
             }
            else
            {
                $user=$result -> fetch_assoc();
                $_SESSION['usuario'] = $user['usuario'];
                $_SESSION['email'] = $email;
                $_SESSION['senha'] = $senha;
                header('Location:update_profile.php');
            }
        }
    }
    
 else
   {
   // Não acessa
   header('Location:login_form.php');
   }

?>