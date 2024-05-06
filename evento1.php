
<?php

session_start();
include ("conexao.php");
//error_reporting(0);


$usuario = $_SESSION['usuario'];


$select = mysqli_query($conexao, "SELECT * FROM `cadastro` WHERE usuario = '$usuario'") or die('query failed');
if(mysqli_num_rows($select) > 0){
   $fetch = mysqli_fetch_array($select);
}


?>



<!DOCTYPE html>
<html lang="pt-br">

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

    <!--Dropdown-Menu Link CSS EXTERNO-->
    <link rel="stylesheet" type="text/css" href="CSS/DropdownCSS.css">

    <style>
        .event-container {
            max-width: 1000px;
            height: 1570px;
            margin: 100px auto;
            background-color: #ffffff;
            border-radius: 18px;
            text-align: center;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin-top: 90px;
            margin-bottom: 35px;
            color: #000000;
        }

        .event-container h1 {
            margin: 0;
            padding: 15px 0;
            text-decoration: underline 2px;
            text-decoration-color: #ff5e1e;
        }

        .event-container p {
            padding: 0 20px;
            line-height: 1.5;
        }

        .event-container img {
            width: 100%;
            border-radius: 18px;
            margin-bottom: 16px;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);
        }

        .event-container .buy-ticket-button {
            background-color: #ff5e1e;
            color: #ffffff;
            font-weight: bold;
            font-size: medium;
            font-family: inherit;
            cursor: pointer;
            border: none;
            padding: 14px 48px;
            border-radius: 32px;
            transition: transform 0.25s ease, background-color 0.25s ease;
        }

        .event-container .buy-ticket-button:hover {
            background-color: #17b446;
            color: #ffffff;
        }

        .mapa {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .mapa h2 {
            color: #ffffff;
            margin: 0;
            padding-bottom: 8px;
            font-size: 21px;
            text-decoration: underline 2px;
            text-decoration-color: #ff5e1e;
        }

        .mapa img {
            width: 300%;
            max-width: 600px;
            border-radius: 18px;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);
            margin-top: 10px;
        }

        /*css da nova pagina de eventos*/
        .evento-titulo {
            margin-left: 50px
        }

        .evento-Local {
            margin-left: 50px
        }

        .evento-dadosInfo {
            margin-left: 50px
        }

        .caixa-preco {
            background-color: hsl(0, 0%, 100%);
            width: 300px;
            height: 120px;
            margin-left: 670px;
            margin-top: -125px;
            border-radius: 18px;
            box-shadow: 0 4px 4px 2px rgba(0, 0, 0, 0.2);
        }

        .evento-descricao {
            margin-left: 50px;
        }


        .event-container hr {
            border: none;
            height: 2px;
            width: 100%;
            background-color: #bbbbbb;
            margin: 15px 0px 10px;
        }

        .mapa-google {
            margin-left: 50px;
        }

        .profile-menu{
            top:30%;
            
        }
    </style>
</head>

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

        <div class="logo">
            <img src="imagens/logo.png" onclick="window.location.href='index.php'">
        </div>
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


    </header>

    <!--Elementos do menu hamburger-->
    <div class="hamburger-menu">
    <div class="hamburger-link" onclick="window.location.href='index.php'">
      <img class="hamburger-icons" src="imagens/home.png" width="24px" height="24px">
      <div class="hamburger-text">Página inicial</div>
    </div>

    <div class="hamburger-link" onclick="window.location.href='historia-caxias.php'">
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

    <div class="event-container">
        <!--Tudo modificado para mexer na nova versao dos eventos -->
        <img src="imagens/evento1.jpg">
        <div class="buy-ticket-container">

        </div>
        <div class="evento-titulo">

            <h3>
                <p style="text-align: left;">Nil Agra em Duque de Caxias</p>
            </h3>

        </div>
        <div class="evento-Local">
            <h4>
                <p style="text-align: left;">Teatro Municipal Raul Cortez., Duque de Caxias - RJ</p>
            </h4>

        </div>
        <div class="evento-dadosInfo">
            <h4>
                <p style="text-align: left;">Sábado: 23/12/23 | Horário: 21:00 ate 22:30</p>
            </h4>

        </div>


        <div class="caixa-preco">
            <br>
            Entrada gratuita
            <hr>
            <button class="buy-ticket-button">Confirmar presença</button>
        </div>
        <br>
        <hr>
        <br>

        <div class="evento-descricao">

            <h4>
                <p style="text-align: left;">Descrição do Evento</p>
            </h4>
            <p style="text-align: left;">Nil Agra apresenta "SEM CONTROLE"; 
                Em seu quinto especial de comédia intitulado "Sem controle", Nil fala sobre as incongruências da vida
                moderna e flutua com leveza por temas considerados polêmicos na vida adulta moderna como: indentidade de
                gênero, liberdade sexual,
                controle de armas e religião levando o público a rir de temas que até então são tabus na sociedade
                Brasileira provando de fato que o limite do humor é a graça.
            </p>


        </div>

        <br>
        <div class="mapa-google">
            <h4>
                <p style="text-align: left;">Localização</p>
            </h4>
            <p style="text-align: left;"> <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14702.180701612!2d-43.31074545691894!3d-22.893254069395066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997d070e398159%3A0x9e05df3c77e2e376!2sEst%C3%A1dio%20Ol%C3%ADmpico%20Nilton%20Santos!5e0!3m2!1spt-BR!2sbr!4v1696986279522!5m2!1spt-BR!2sbr"
                    width="800" height="400"
                    style="border: 0; border-radius: 18px;  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
        </div>


    </div>


    <!--Retirei o Mapa , inutil nesta pagina !!!-->


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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://kit.fontawesome.com/8016ece9b9.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                items: 1,
                dots: true,
                nav: true,
                navText: ["<img src='imagens/seta-esquerda.png'>",
                    "<img src='imagens/seta-direita.png'>"
                ],
                loop: true,
                autoplay: true,
                autoplayHoverPause: true
            });
        });

        $(document).ready(function () {
            $(".hamburger-button").click(function () {
                $(".hamburger-menu").toggleClass("show");
            });
        });
    </script>

    <!--Javascript da Função do Dropdown Menu-->

    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>
</body>

</html>