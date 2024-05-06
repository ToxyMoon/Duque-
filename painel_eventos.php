<?php

session_start();
include ("criareventoconexao.php");
//error_reporting(0);


$usuario = $_SESSION['usuario'];
$nome_evento = $_SESSION['nome_evento'];

if (isset($_SESSION['usuario'])) {
$select = mysqli_query($conexao, "SELECT * FROM `cadastro` WHERE usuario = '$usuario'") or die('query failed');
if(mysqli_num_rows($select) > 0){
   $fetch = mysqli_fetch_array($select);
}
}


// if (isset($_SESSION['nome_evento'])) {
//     $select = mysqli_query($conexao, "SELECT * FROM `dados_eventos` WHERE nome_evento = '$nome_evento'") or die('query failed');
//     if(mysqli_num_rows($select) > 0){
//        $fetch = mysqli_fetch_array($select);
//     }
//     }





?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Favoritos</title>
    <!-- Link das FONTES -->
    <link rel="stylesheet" as="style" crossorigin
    href="https://cdnjs.cloudflare.com/ajax/libs/pretendard/1.3.8/static/pretendard.css" />
    <link rel='stylesheet' type="text/css" href='https://fonts.googleapis.com/css?family=Inter'>

    <link rel="stylesheet" type="text/css" href="CSS/botoes_carrossel.css">
    <link rel="stylesheet" type="text/css" href="CSS/estilo_eventos.css"/>
    

<style> 

.categorias {
      text-align: center;
      color: #050505;
      font-size: 24px;
      font-size: 26px;
      text-decoration: none;
      margin: 40px auto 30px;
    }


.event-boxes {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      max-width: 1000px;
      margin: 20px auto 0;
      padding: 0 20px;
      gap: 25px;
    }

    .event-box {
      background-color: #ffffff;
      cursor: pointer;
      border-radius: 18px;
      box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);
      transition: transform 0.2s ease, background-color 0.2s ease;
      margin-top: -8px;
    }

    .event-box:hover {
      background-color: #e6e6e69a;
    }


    .event-box a {
      text-decoration: none;
      color: #050505;
    }

    .event-box img {
      width: 100%;
      border-radius: 18px 18px 0 0;
      margin-bottom: 0;
    }


     /*Design NOVO-EVENTOS*/
     .card-texto {
      padding-left: 14px;
      padding-right: 14px;
      margin-top: -14px;
    }

    .data-card {
      background-color: #FF8C1E;
      width: auto;
      max-width: fit-content;
      border-radius: 6px;
      color: #ffffff;
      padding: 2px 4px 2px 4px;
    }

    .nome-card {
      font-size: 20px;
      margin-top: -4px;
    }

    .local-card {
      font-weight: 600;
      margin-top: -4px;
    }

    /* Css do painel de eventos */

    .msg{
        margin-right: 10%;
    }
   
    

</style>
</head>
<body>
<button class="hamburger-button"
      onclick="this.classList.toggle('aberta');this.setAttribute('aria-expanded', this.classList.contains('aberta'))"
      aria-label="Pagina Inicial">
      <svg width="48" height="48" viewBox="0 0 100 100">
        <path class="linha linha1"
          d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
        <path class="linha linha2" d="M 20,50 H 80" />
        <path class="linha linha3"
          d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
      </svg>
    </button>

    <!-- <div class="logo">
      <img src="imagens/logo.png" onclick="window.location.href='index.php'">
    </div> -->

      <!--Elementos do menu hamburger-->
  <div class="hamburger-menu">
    <div class="hamburger-link" onclick="window.location.href='index.php'">
      <img class="hamburger-icons" src="imagens/home.png" width="24px" height="24px">
      <div class="hamburger-text">Página inicial</div>
    </div>

    <div class="hamburger-link" onclick="window.location.href='Historia Caxias.php'">
      <img class="hamburger-icons" src="imagens/livro.png" width="24px" height="24px">
      <div class="hamburger-text">História de Caxias</div>
    </div>

    <div class="hamburger-link" onclick="window.location.href='tutorial.php'">
      <img class="hamburger-icons" src="imagens/tutorial.png" width="24px" height="24px">
      <div class="hamburger-text">Tutoriais</div>
    </div>

    <div class="hamburger-link" onclick="window.location.href='contatos.php'">
      <img class="hamburger-icons" src="imagens/contatos.png" width="24px" height="24px">
      <div class="hamburger-text">Contatos</div>
    </div>

    <div class="hamburger-link" onclick="window.location.href='sobre.php'">
      <img class="hamburger-icons" src="imagens/info.png" width="24px" height="24px">
      <div class="hamburger-text">Sobre nós</div>
    </div>

    <div class="hamburger-link" onclick="window.location.href='FAQ.php'">
      <img class="hamburger-icons" src="imagens/FAQ.png" width="24px" height="24px">
      <div class="hamburger-text">Dúvidas frequentes</div>
    </div>
  </div>

    <!--Javascripts do menu hamburger, do carrossel de imagens e puxar icones do site-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://kit.fontawesome.com/8016ece9b9.js" crossorigin="anonymous"></script>


<script>
    // Funções do Menu Hamburger
    $(document).ready(function () {
      $(".hamburger-button").click(function () {
        $(".hamburger-menu").toggleClass("show");
      });
    });
  </script>


  </header>



  <div class="msg">
    <h2>Bem vindo,<?php echo $fetch['usuario']; ?> ao Painel de Eventos </h2>
    </div>


    <h3>Eventos Criados</h3>




<br><br><br><br>
        
<div class="event-boxes">
    <div class="event-box" onclick="window.location.href='evento1.php'">
    <a href="evento1.php">
      <img src="imagens/evento1.jpg">
      <div class="card-texto">
        <h4 class="data-card">Sáb. 23/12 • 21:00</h4>
        <h3 class="nome-card"><?php echo $fetch['nome_evento']; ?></h3>
        <h5 class="local-card">Local: Teatro Municipal Raul Cortez.</h5>
      </div>
    </a>
  </div>
</div>



</body>
</html>