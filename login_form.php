<?php

include ('conexao.php');

session_start();


if (isset($_GET['erro'])){
  
  $erro = 'É necessário fazer o Login para acessar essa página!';

}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/png" href="imagens/favicon.png">
  <title>Entrar | Caxias+</title>
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/pretendard/1.3.8/static/pretendard.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <script src="https://kit.fontawesome.com/ef2f298dff.js" crossorigin="anonymous"></script>



</head>

<style>
  body {
    font-family: "Pretendard";
    background-image: url(imagens/fundo2.png);
    background-repeat: no-repeat;
    background-size: cover;
  }

  #close-icon {
    display: flex;
    float: right;
    margin-top: -55px;
    margin-right: -50px;
    cursor: pointer;
  }

  #icone-cadeado {
    position: absolute;
    padding-top: 10px;
    padding-left: 10px;
    font-size: 18px;
  }

  #icone-email {
    position: absolute;
    padding-top: 11px;
    padding-left: 10px;
    font-size: 18px;
  }

  #icone-user {
    position: absolute;
    padding-top: 10px;
    padding-left: 10px;
    font-size: 18px;
  }

  #icone-olho {
    position: absolute;
    margin-top: -29px;
    margin-left: 307px;
    cursor: pointer;
    font-size: 20px;
  }

  #fundo-login {
    background-color: #ffffff;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15);
    width: 420px;
    height: 440px;
    border-radius: 18px;
    margin: auto;
    display: flex;
    margin-top: 10%;

  }

  #inputs,input {
    margin-top: 2px;
    text-decoration: none;
    width: 300px;
    height: 24px;
    border-radius: 5px;
    outline-style: none;
    padding-left: 32px;
  }

  #container-texto {
    padding: 2px;
    padding-left: 10px;
    font-size: 18px;
    color: #ffffff;
    font-weight: bold;
  }

  h4 {
    color: #050505;
    margin-bottom: 5px;
    font-size: 16px;

  }

  h3 {
    color: #050505;
    font-size: 24px;
    padding-bottom: 1px;
    padding-left: 30px;

  }

  p {
    color: #050505;
    font-size: 12px;
    padding-left: 4px;
    padding-top: 14px;
    width: 100%
  }

  a {
    color: #ff5e1e;
    text-decoration: none;
    padding-left: 1px;

  }

  #btn-enviar {
    background-color: #bbbbbb;
    color: #050505;
    font-weight: bold;
    font-family: inherit;
    cursor: pointer; 
    border: none;
    width: 140px;
    height: 45px;
    padding: 12px 24px;
    margin-left: 110px;
    margin-top: 6px;
    border-radius: 32px;
    transition: background-color 0.2s ease, color 0.2s ease;
  }

  #btn-enviar:hover {
    background-color: #2196F3;
    color: #ffffff;
  }

  #username,
  #email,
  #password {
    background-color: #ffffff;
    font-family: inherit;
    border-color: #bbbbbb;
    border-style: solid;
    height: 30px;
    border-radius: 32px;
  }

 .error-message{
    width: 400px;
 
    justify-content: center;
    margin: auto;

 }

.error-message p {
    padding: 2px;
    font-size: 16px;
    color: #ff5c5c;
    width: 100%;
    margin-top: 10px;
}
  
</style>


<body>

 <div class="error-message">

  <p><?php echo $erro ?? '' ?></p>

</div>


  <!--Tela de Login do Caxias + -->

  <div id="fundo-login">
    <!-- Div com o fundo-->

    <div id="container-texto">
      <!-- Div com todos os textos-->
      <h3>Entrar no Caxias+</h3>

      <!-- ícone X do Login-->
      <div id="close-icon" onclick="window.location.href='index.php'">
        <img class="fechar" src="imagens/fechar.png" width="32px" height="32px">
      </div>


      <div id="inputs">
        <!-- Div com os campos de input e ícones-->

        <form method="POST" action="testLogin.php">
          <h4>Nome de usuário</h4>
          <i id="icone-user" class="fa-solid fa-user" style="color: #bbbbbb;"></i>
          <input type="text" id="username" name="usuario" placeholder="Insira o seu nome de usuário...">

          <h4>E-mail</h4>
          <i id="icone-email" class="fa-solid fa-envelope" style="color: #bbbbbb;"></i>
          <input type="email" id="email" name="email" placeholder="Insira o seu e-mail...">

          <h4>Senha</h4>
          <i id="icone-cadeado" class="fa-solid fa-lock" style="color: #bbbbbb;"></i>
          <input type="password" id="password" name="senha" placeholder="Insira a sua senha...">
          
          <br>

          <input type="submit" name="submit" id="btn-enviar" value="ENTRAR">  

          <p>Ainda não tem uma conta? <a href="cadastro_form.php">Criar Conta</a></p>
        </form>
      </div>
    </div>
  </div>


  <!--ícone de ocultar Senha-->
  <script>
    const togglePassword = document.querySelector("#icone-olho");
    const password = document.querySelector("#password");

    togglePassword.addEventListener("click", function () {
      const type = password.getAttribute("type") === "password" ? "text" : "password";
      password.setAttribute("type", type);

      this.classList.toggle("bi-eye-slash-fill");
    });

    const form = document.querySelector("form");
    form.addEventListener('submit', function (e) {
      e.preventDefault();
    });
  </script>
</body>
</html>