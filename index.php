
<?php

session_start();
include ("conexao.php");
error_reporting(0);


$usuario = $_SESSION['usuario'];


$select = mysqli_query($conexao, "SELECT * FROM `cadastro` WHERE usuario = '$usuario'") or die('query failed');
if(mysqli_num_rows($select) > 0){
   $fetch = mysqli_fetch_array($select);
}



// Variavel que verifica se o usuario esta logado
$logged_in = isset($_SESSION['usuario']) && !empty($_SESSION['usuario']);


//$usuario = $_SESSION['usuario'];

//if(!isset($usuario)){

 // header('location:login_form');
//}

/* Esse código puxa os dados do banco e armazena na variavel "$fetch" para ser exibido no site   */
/*$select = mysqli_query($conexao, "SELECT * FROM `cadastro` WHERE usuario = '$usuario'") or die('query failed');
  if(mysqli_num_rows($select) > 0){
   $fetch = mysqli_fetch_assoc($select);
    }
*/
?>

<!DOCTYPE html>
<html lang="pt-br">
<!--CSS do carrossel de imagens, caixas de eventos e puxar CSS externos para outros elementos-->

<head>
  <title>Página inicial | Caxias+</title>
  <link rel="icon" type="image/png" href="imagens/favicon.png">
  <link rel="stylesheet" as="style" crossorigin
    href="https://cdnjs.cloudflare.com/ajax/libs/pretendard/1.3.8/static/pretendard.css" />
  <link rel='stylesheet' type="text/css" href='https://fonts.googleapis.com/css?family=Inter'>

  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="CSS/botoes_carrossel.css">
  <link rel="stylesheet" type="text/css" href="CSS/estilo_eventos.css" />

  <!-- MENU DROPDOWN-->
 <!-- Google Fonts CDN Link -->
 <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
   

  <style>
    .owl-carousel {
      width: 67.5%;
      margin: 0 auto;
      position: relative;
      top: 20px;
    }

    .owl-carousel .owl-item {
      border-radius: 18px;
      overflow: hidden;
    }

    .owl-carousel .owl-stage-outer {
      border-radius: 18px;
      box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);
    }

    .owl-carousel img {
      width: 100%;

      transition: transform 0.2s ease;
    }

    .owl-carousel .owl-item:hover img {
      transform: scale3d(1.005, 1.005, 1);
    }

    .owl-dots {
      text-align: center;
      margin-top: 20px;
      position: relative;
      bottom: 10px;
      left: 49.25%;
      transform: translateX(-50%);
      z-index: 2;
    }

    .owl-dot {
      display: inline-block;
      width: 8px;
      height: 30px;
      border-radius: 50%;
      margin: 0 5px;
    }

    .owl-nav {
      position: absolute;
      width: 100%;
      top: 38%;
    }

    .owl-nav .owl-prev,
    .owl-nav .owl-next {
      position: absolute;
      width: 45px;
      transition: transform 0.2s ease;
    }

    .owl-nav .owl-prev {
      left: -60px;
    }

    .owl-nav .owl-next {
      right: -60px;
    }

    .owl-nav .owl-prev:hover,
    .owl-nav .owl-next:hover {
      transform: scale(1.05);
    }

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

    .bem-vindo {
      padding-top: 80px;
      padding-bottom: 20px;
      padding-left: 18%;
      margin: 0 auto;
    }

    .mensagem-bem-vindo {
      margin-bottom: 10px;
    }

    .mensagem-convite {
      color: #444444;
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

  /*DropDown CSS */

.profile-menu {
  display: flex;
  position: relative;
  top: 3px;
  right: 30px;
  padding-left: 2.5%;
  
}

.profile-menu .action {
  display: flex;
  width: 56px;
  height: 56px;
  background-color: #222533;
  border-radius: 50%;
  overflow: hidden;
  cursor: pointer;
  box-shadow: #050505 0px 0px 6px 1px;
  padding-right: 0%;
}

.profile-menu .action img {
  width: 100%;
  height: 100%;
}

.profile-menu .menu {
  width: 250px;
  padding: 30px;
  background-color: #222533;
  border-radius: 10px;
  position: absolute;
  top: 75px;
  right: 0px;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s;
}

.profile-menu .menu.active {
  opacity: 1;
  visibility: visible;
}

.profile-menu .menu::before {
  content: "";
  width: 16px;
  height: 16px;
  background-color: #222533;
  border-top-left-radius: 3px;
  position: absolute;
  top: -8px;
  right: 19px;
  transform: rotate(45deg);

}

.profile-menu .menu .profile {
  display: flex;
  align-items: center;
  margin-bottom: 30px;
  
  
}

.profile-menu .menu .profile img {
  width: 56px;
  height: 56px;
  border-radius: 50%;
  user-select: none;
}

.profile-menu .menu .profile .info {
  margin-left: 15px;
}

.profile-menu .menu .profile .info h2 {
  color: #dadada;
  font-size: 18px;
  font-weight: 400;
  text-transform: capitalize;
  margin-bottom: 1px;
}

.profile-menu .menu .profile .info p {
  color: #7d8193;
  font-size: 16px;
  font-weight: 400;
}

.profile-menu .menu .btn {
  width: 250px;
  height: 53px;
  color: #e5e5e5;
  background-color: #1a1c29;
  border-radius: 5px;
  font-size: 16px;
  font-weight: 400;
  text-decoration: none;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 30px;
  transition: all 0.3s;
  
}


.profile-menu .menu ul li {
  list-style: none;
  align-items: left;
  margin-bottom: 18px;

}

.profile-menu .menu ul li a {
  color: #e5e5e5;
  font-size: 16px;
  font-weight: 400;
  text-decoration: none;
  cursor: pointer;

}

.profile-menu .menu ul li a:hover {
  padding-left: 3px;
  transition: all 0.2s;
  
}

.profile-menu .menu ul li img {
  width: 20px;
  margin-right: 2%;
  user-select: none;
}

.p{
  margin-top: -40px;
}

.info{
  margin-top: 5px;
  margin-bottom: 0px;
}




  @media screen and(max-width:1160px){

    .mensagem-bem-vindo{
      font-size:21%;
    }

  }


  </style>
</head>

<!--Elementos do cabecalho da página (Menu hamburger e logo)-->

<body>
  <header>

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

    <div class="logo">
      <img src="imagens/logo.png" onclick="window.location.href='index.php'">
    </div>

    <div class="search">
      <input class="search-input" type="text" placeholder="Pesquisar eventos...">
      <div class="button-search"> <img src="imagens/pesquisa.png" type="button"
          onclick="TopNavBar.googleSearchSubmit()">
      </div>
    </div>

    <!--Elementos do cabecalho da página (Botoes de conta e criar evento)-->
    <div id="btn_user" class="buttons-user">
      <button onclick="window.location.href='login_form.php'">ENTRAR</button>
      <button onclick="window.location.href='cadastro_form.php'">CRIAR CONTA</button>
    </div>
    <div class="buttons-event">
      <button onclick="window.location.href='CriarEventoHome.php'">+ CRIAR EVENTO</button>
    </div>

    <!-- Verifica se o usuário está logado, caso não esteja, vai ocultar os botões de Login e Cadastro -->

    <script>
        let loggedIn = <?php echo $logged_in ? 'true' : 'false'; ?>;

        if (loggedIn) {
            document.getElementById('btn_user').style.display = 'none';
        }
    </script>


    <!--Menu dropdown-->
   
    <div class="profile-menu">
      <div id="action" class="action">

        <?php

        if(isset($_SESSION['usuario'])){

        // Exibe a imagem do usuário se estiver logado
        echo '<img src="Arquivos-Site-TCC/uploaded_img/'.$fetch['imagem'].'">';
        }

        else {
        //Sem usuário Logado - imagem padrão
        echo '<img src="Arquivos-Site-TCC/images/default-avatar.png">';
        }
        ?>

      </div>
      <div id="menu" class="menu">
        <div class="profile">

        <?php

        if(isset($_SESSION['usuario'])){

        // Exibe a imagem do usuário se estiver logado
        echo '<img src="Arquivos-Site-TCC/uploaded_img/'.$fetch['imagem'].'">';
        }

        else {
        //Sem usuário Logado - imagem padrão
        echo '<img src="Arquivos-Site-TCC/images/default-avatar.png">';
        }
        ?>
  
        <div class="info">
            <h2><?php echo $fetch['nome']; ?></h2>
            <p style="margin-top:5px;">@<?php echo $fetch['usuario']; ?></p>
          </div>
        </div>

        <ul>
          <li style="margin-right:15px;">
          <img src="imagens/User.png" />
            <a onclick="window.location.href='update_profile.php'">Conta</a>
          </li>
         
          <li>
          <img src="imagens/edit.png" />
            <a href="#">Editar Perfil</a>
          </li>

          <li>
            <img src="imagens/logout.png" />
            <a onclick="window.location.href='logout.php'">Sair</a>
          </li>
        </ul>
      </div>
    </div>

<!-- Quando passa o Mouse por cima, o menu do usuário é exibido -->    
<script>
    var action = document.getElementById('action');
    var menu = document.getElementById('menu');

    action.addEventListener('mouseover', function() {
        menu.classList.add('active');
    });

    menu.addEventListener('mouseover', function() {
        menu.classList.add('active');
    });

    menu.addEventListener('mouseout', function() {
        menu.classList.remove('active');
    });
</script>


    <!-- jQuery CDN Link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Custom js -->
    <script src="js/main.js"></script>
  

  </header>


  <!-- Verifica se o usuário está logado, caso não esteja, vai ocultar as mensagens de  Boas vindas com o nome do usuario-->
  <?php
session_start(); // Adicione esta linha no início do seu código
if(isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])){ // Verifique se o usuário está logado
?>
<div id="msg">
 <div class="bem-vindo">
    <h1 class="mensagem-bem-vindo">Olá, <?php echo $fetch['usuario']; ?>
    </h1>

    <div class="mensagem-convite">Qual evento voce gostaria de acessar hoje?
    </div>
 </div>
 </div>
<?php
}
?>

  <!--Eventos do carrossel de imagens-->
  <div class="owl-carousel owl-theme">
    <div class="item">
      <a href="evento1.php">
        <img src="imagens/evento1.jpg">
      </a>
    </div>

    <div class="item">
      <a href="evento2.php">
      <img src="imagens/evento2.jpg">
      </a>
    </div>

    <div class="item">
      <a href="evento3.php">
      <img src="imagens/evento3.jpg">
      </a>
    </div>

    <div class="item">
      <a href="evento4.php">
      <img src="imagens/evento4.jpg">
      </a>
    </div>

    <div class="item">
      <a href="evento5.php">
      <img src="imagens/evento5.jpg">
      </a>
    </div>

    <div class="item">
      <a href="evento6.php">
      <img src="imagens/evento6.jpg">
      </a>
    </div>
  </div>
  </div>
  <br>

  <!--Eventos Destaque-->
  <h2 class="categorias">DESTAQUES</h2>


  <div class="event-boxes">
  <div class="event-box" onclick="window.location.href='evento1.php'">
    <a href="evento1.php">
      <img src="imagens/evento1.jpg">
      <div class="card-texto">
        <h4 class="data-card">Sáb. 23/12 • 21:00</h4>
        <h3 class="nome-card">Nil Agra | SEM CONTROLE</h3>
        <h5 class="local-card">Local: Teatro Municipal Raul Cortez.</h5>
      </div>
    </a>
  </div>


    <div class="event-box" onclick="window.location.href='evento2.php'">
      <a href="evento2.php">
        <img src="imagens/evento2.jpg">

        <div class="card-texto">
          <h4 class="data-card">Dom. 17/12 • 11:00</h4>
          <h3 class="nome-card">Japan Hero | Seja um Héroi!</h3>
          <h5 class="local-card">Local: Escola ZION</h5>
        </div>
      </a>
    </div>


    <div class="event-box" onclick="window.location.href='evento3.php'">
      <a href="evento3.php">
      <img src="imagens/evento3.jpg">
        <div class="card-texto">
          <h4 class="data-card">Sex. 01/12 • 20:00</h4>
          <h3 class="nome-card">Douglas Di Lima | Vida de Crente</h3>
          <h5 class="local-card">Local: Igreja Batista Atitude</h5>
        </div>
      </a>
    </div>


    <div class="event-box" onclick="window.location.href='evento4.php'">
      <a href="evento4.php">
      <img src="imagens/evento4.jpg">
        <div class="card-texto">
          <h4 class="data-card">Ter. 21/11 • 15:00</h4>
          <h3 class="nome-card">Week tudooo!</h3>
          <h5 class="local-card">Local: Caxias Shopping</h5>
        </div>
      </a>
    </div>


    <div class="event-box" onclick="window.location.href='evento5.php'">
      <a href="evento5.php">
      <img src="imagens/evento5.jpg">
        <div class="card-texto">
          <h4 class="data-card">Ter. 19/12 • 09:30</h4>
          <h3 class="nome-card">Peneira Duque de Caxias FC</h3>
          <h5 class="local-card">Local: CT Asmetro - Duque de Caxias Futebol Clube</h5>
        </div>
      </a>
    </div>


    <div class="event-box" onclick="window.location.href='evento6.php'">
      <a href="evento6.php">
      <img src="imagens/evento6.jpg">
        <div class="card-texto">
          <h4 class="data-card">Dom. 19/11 • 17:00</h4>
          <h3 class="nome-card">Peneira em Duque de Caxias</h3>
          <h5 class="local-card">Local: CT do Vasco - Próximo ao Caxias Shopping</h5>
        </div>
      </a>
    </div>

  </div>

  <!--Eventos Shows-->
  <h2 class="categorias">SHOWS</h2>

  <div class="event-boxes">
    <div class="event-box" onclick="window.location.href='evento7.php'">
      <a href="evento7.php">
      <img src="imagens/evento7.jpg">
        <div class="card-texto">
          <h4 class="data-card">Ter. 24/10 • 15:00</h4>
          <h3 class="nome-card">Mix Festival</h3>
          <h5 class="local-card">Local: Museu Caxias</h5>
        </div>
      </a>
    </div>

    <div class="event-box" onclick="window.location.href='evento8.php'">
      <a href="evento8.php">
      <img src="imagens/evento8.jpg">
        <div class="card-texto">
          <h4 class="data-card">Ter. 28/12 • 15:00</h4>
          <h3 class="nome-card">Caxias x São Gonçalo</h3>
          <h5 class="local-card">Local: CT do Duque de Caxias</h5>
        </div>
      </a>
    </div>

    <div class="event-box" onclick="window.location.href='evento9.php'">
      <a href="evento9.php">
      <img src="imagens/evento9.jpg">
        <div class="card-texto">
          <h4 class="data-card">Ter. 28/12 • 15:00</h4>
          <h3 class="nome-card">Caxias x São Gonçalo</h3>
          <h5 class="local-card">Local: CT do Duque de Caxias</h5>
        </div>
      </a>
    </div>
  </div>
  
  <!--Eventos Esportivos-->

  <h2 class="categorias">ESPORTIVOS</h2>

  <div class="event-boxes">
    <div class="event-box" onclick="window.location.href='Evento10.php'">
      <a href="evento10.php">
      <img src="imagens/evento10.jpg">
        <div class="card-texto">
          <h4 class="data-card">Ter. 28/12 • 15:00</h4>
          <h3 class="nome-card">Caxias x São Gonçalo</h3>
          <h5 class="local-card">Local: CT do Duque de Caxias</h5>
        </div>
      </a>
    </div>

    <div class="event-box" onclick="window.location.href='evento11.php'">
      <a href="evento11.php">
      <img src="imagens/evento11.jpg">
        <div class="card-texto">
          <h4 class="data-card">Ter. 28/12 • 15:00</h4>
          <h3 class="nome-card">Caxias x São Gonçalo</h3>
          <h5 class="local-card">Local: CT do Duque de Caxias</h5>
        </div>
      </a>
    </div>

    <div class="event-box" onclick="window.location.href='evento12.php'">
      <a href="evento12.php">
      <img src="imagens/evento12.jpg">
        <div class="card-texto">
          <h4 class="data-card">Ter. 28/12 • 15:00</h4>
          <h3 class="nome-card">Caxias x São Gonçalo</h3>
          <h5 class="local-card">Local: CT do Duque de Caxias</h5>
        </div>
      </a>
    </div>
  </div>
</div>


  <!--Rodapé da página-->
  <br><br>
  <footer>
    <div class="footer-container">
      <ul class="footer-links">
        <li><a href="#">Termos de Uso</a></li>
        <li><a href="#">Sobre nós</a></li>
      </ul>
      <p>&copy; Caxias+ 2023 | Plataforma de eventos em Duque de Caxias</p>
    </div>
  </footer>

  <!--Javascripts do menu hamburger, do carrossel de imagens e puxar icones do site-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://kit.fontawesome.com/8016ece9b9.js" crossorigin="anonymous"></script>

  <script>
    $(document).ready(function () {
      $(".owl-carousel").owlCarousel({
        items: 1,
        dots: true,
        nav: true,
        navText: ["<img src='imagens/seta-esquerda.png'>", "<img src='imagens/seta-direita.png'>"],
        loop: true,
        autoplay: true,
        autoplayHoverPause: true
      });
    });
</script>



<script>
    // Funções do Menu Hamburger
    $(document).ready(function () {
      $(".hamburger-button").click(function () {
        $(".hamburger-menu").toggleClass("show");
      });
    });
  </script>

  

</body>

</html>