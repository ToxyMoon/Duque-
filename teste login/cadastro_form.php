<?php

include('conexao.php');


if (isset($_POST['submit'])){

$conta = $_POST['perfil'];
$usuario = $_POST['usuario'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];


$result = "INSERT INTO cadastro(conta,usuario,nome,email,telefone,senha) VALUES('$conta','$usuario','$nome','$email','$telefone','$senha')";

$resultado = mysqli_query($conexao, $result);



}


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro | Caxias+</title>
  <link rel="icon" type="image/png" href="imagens/favicon.png">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/pretendard/1.3.8/static/pretendard.css" />
  <script src="https://kit.fontawesome.com/ef2f298dff.js" crossorigin="anonymous"></script>

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
      margin-top: -200px;
      margin-right: 18px;
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

    #icone-telefone {
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

    #fundo-cadastro {
      background-color: #ffffff;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15);
      width: 650px;
      height: 730px;
      border-radius: 18px;
      margin: auto;
      display: flex;
      margin-top: 90px;

    }

    #inputs,input {
      margin-top: 2px;
      text-decoration: none;
      width: 500px;
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
      color: #333333;
      font-size: 24px;
      padding-bottom: 1px;
      padding-left: 213px;
      margin-top: -1px
    }

    p {
      color: #050505;
      font-size: 12px;
      padding-left: 4px;
      padding-top: 12px;
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
      width: 150px;
      height: 50px;
      padding: 12px 24px;
      margin-left: 210px;
      margin-top: 6px;
      border-radius: 32px;
      transition: background-color 0.2s ease, color 0.2s ease;
    }

    #btn-enviar:hover {
      background-color: #2196F3;
      color: #ffffff;
    }

    .caixa-dados {
      background-color: #ffffff;
      font-family: inherit;
      border-color: #bbbbbb;
      border-style: solid;
      height: 30px;
      border-radius: 32px;
    }


    #campo-sobrenome {
      margin-left: 280px;
      margin-top: -84px;
    }


    #logo {
      width: 50%;
      margin: auto;
      padding-left: 120px;
      padding-top: 8px;

    }

    #hr1 {
      width: 648px;
      margin-left: -10px;
      border-color: #5c5c5c7e;
    }

    #hr2 {
      width: 500px;
      margin-right: 90px;
      border-color: #5c5c5c36;
    }

    #adm_icon{
      width: 50px;
      padding-left: 485px;
      margin-top: -65px;
    }


  </style>
</head>

<body>

  <!--Tela de Cadastro do Caxias + -->

  <div id="fundo-cadastro">
    <!-- Div com o fundo-->

    <div id="container-texto">
      <!-- Div com todos os textos-->

      <!-- Div com a logo -->
      <div id="logo"> <img src="imagens/logo.png" width="50%">
      </div>
      <hr id="hr1">

      <h3>Faça seu Cadastro</h3>

      <p style="width: 88%; padding-left: 30px; margin-top:-12px;">*A opção de conta: "Organizador de Eventos" permite o
        usuário tes acesso a ferramentas de criação e edição de eventos de sua autoria. </p>

      <p style="width: 90%; padding-left: 30px; margin-top: -15px;"> *A opção de conta: "Usuário Comum" permite o
        usuário ter acesso livre a todos
        os eventos, além de poder se inscrever, avaliar e compartilhar eventos.</p>
      <hr id="hr2">

      <!-- ícone X do Login-->
      <div id="close-icon" onclick="window.location.href='index.php'">
        <img class="fechar" src="imagens/fechar.png" width="32px" height="32px">
      </div>

      
    <form method="POST" action="cadastro_form.php">
     <div class="radio1"> 
      <input type="radio" id="btn-OrganizadorEventos" name="perfil" value="Organizador de Eventos">
      <p style="margin-left: 268px; margin-top:-36px; font-size: 15px;">Organizador de Eventos</p>
      <!--<img id="adm_icon" src="imagens/funcionarios (1).png">-->
    </div>

      <input type="radio" id="btn-contaComum" name="perfil" value="Usuário Comum">
      <p style="margin-left: 268px; margin-top:-36px; font-size: 15px; margin-bottom: 50px;">Usuário Comum</p>
      <!--<img id="equipe_icon" src="imagens/pessoas (1).png">-->


      <div id="inputs">
        <!-- Div com os campos de input e ícones-->
        
          <h4>Nome de usuário</h4>
          <i id="icone-user"  class="fa-solid fa-user" style="color: #bbbbbb;"></i>
          <input style="width: 220px;" type="text" name="usuario" class="caixa-dados" placeholder="Insira o seu nome de usuário...">

          <div id="campo-sobrenome">
            <h4>Nome completo</h4>
            <i id="icone-user" class="fa-solid fa-user" style="color: #bbbbbb;"></i>
            <input style="width: 221px;" type="text" name="nome" id="sobrenome" class="caixa-dados"
              placeholder="Insira o seu nome completo...">
          </div>

          <h4>E-mail</h4>
          <i id="icone-email" class="fa-solid fa-envelope" style="color: #bbbbbb;"></i>
          <input type="email" name="email" class="caixa-dados" placeholder="Insira o seu e-mail...">

          <h4>Telefone</h4>
          <i id="icone-telefone" class="fa-solid fa-phone" style="color: #bbbbbb;"></i>
          <input type="text" name="telefone" class="caixa-dados" placeholder="(00) 0000-0000">

          <h4>Senha</h4>
          <i id="icone-cadeado" class="fa-solid fa-lock" style="color: #bbbbbb;"></i>
          <input type="password" name="senha" class="caixa-dados" placeholder="Insira a sua senha...">
          <br><br>

          <button type="submit" name="submit" id="btn-enviar">ENVIAR</button> 
        </form>

      </div>
    </div>
  </div>

</body>

</html>