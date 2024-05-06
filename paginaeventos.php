<?php
require_once 'conexaoabaeventosupdate.php';

$sql=" SELECT * FROM dados_eventos";
$all_product = $conn->query($sql);
?>







<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title> aba eventos</title>
    
    <link rel="icon" type="image/png" href="imagens/favicon.png">
    <link rel="stylesheet" as="style" crossorigin
        href="https://cdnjs.cloudflare.com/ajax/libs/pretendard/1.3.8/static/pretendard.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="estilo_eventos.css" />
    <style>
        .event-container {
            max-width: 1200px;
            height: 1300px;
            margin: 100px auto;
            background-color: #ffffff;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);
            padding: 20px;
            margin-top: 100px;
            margin-bottom: 35px;
            color: #000000;
        }

        .event-container h1 {
            margin: 0;
            padding: 15px 0;
            text-decoration: underline 2px;
            text-decoration-color: #ff5e00;
        }

        .event-container p {
            padding: 0 20px;
            line-height: 1.5;
        }

        .event-container img {
            width: 70%;
            border-radius: 20px;
            margin-bottom: 16px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);
        }

        .event-container .buy-ticket-button {
            background-color: #ff5e00;
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
            transform: scale(1.05);
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
            text-decoration-color: #ff5e00;
        }

        .event-boxes {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    margin: 20px auto 0;
    padding: 0 20px;
    gap: 25px;
    overflow-x: auto;
    width: 80%;
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



        .mapa img {
            width: 300%;
            max-width: 600px;
            border-radius: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);
            margin-top: 10px;
        }

        
    .event-teste{
        width: 300px;
        height: 200px;
    }







  /*css da nova pagina de eventos*/
        .evento-titulo{
margin-left: 50px
        }
        .evento-Local{
            margin-left: 50px   
        }
        .evento-dadosInfo{
            margin-left: 50px
        }
.Caixa-de-preco{
background-color: hsl(0, 0%, 100%);
            width: 350px;
            height: 120px;
            margin-left: 755px;
            margin-top: -125px;
            border-radius: 0px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);

}
.evento-descricao{
    margin-left: 50px;
}
.mapa-da-google{
    margin-left: 50px;
}
.quadro{
    width: 10px;
}
.eventoquadro{
    width: 450px;
    height: 350px;
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
        <!--Elementos do menu hamburger-->
        <div class="hamburger-menu">
            <div class="hamburger-link" onclick="window.location.href='index.html'">
                <img class="hamburger-icons" src="imagens/home.png" width="24px" height="24px">
                <div class="hamburger-text">Página inicial</div>
            </div>

            <div class="hamburger-link" onclick="window.location.href='historia.html'">
                <img class="hamburger-icons" src="imagens/livro.png" width="24px" height="24px">
                <div class="hamburger-text">História de Caxias</div>
            </div>

            <div class="hamburger-link" onclick="window.location.href='tutorial.html'">
                <img class="hamburger-icons" src="imagens/tutorial.png" width="24px" height="24px">
                <div class="hamburger-text">Tutoriais</div>
            </div>

            <div class="hamburger-link" onclick="window.location.href='contatos.html'">
                <img class="hamburger-icons" src="imagens/contatos.png" width="24px" height="24px">
                <div class="hamburger-text">Contatos</div>
            </div>

            <div class="hamburger-link" onclick="window.location.href='blog.html'">
                <img class="hamburger-icons" src="imagens/blog.png" width="24px" height="24px">
                <div class="hamburger-text">Blog</div>
            </div>

            <div class="hamburger-link" onclick="window.location.href='sobre.html'">
                <img class="hamburger-icons" src="imagens/info.png" width="24px" height="24px">
                <div class="hamburger-text">Sobre nós</div>
            </div>

            <div class="hamburger-link" onclick="window.location.href='FAQ.html'">
                <img class="hamburger-icons" src="imagens/FAQ.png" width="24px" height="24px">
                <div class="hamburger-text">Dúvidas frequentes</div>
            </div>
        </div>

        <div class="logo">
            <img src="imagens/logo.png" alt="Logo do site">
        </div>
        <div id="divBusca">
            <input type="text" id="txtBusca" placeholder="Digite aqui para pesquisar..." />
            <img src="imagens/pesquisa.png" id="btnBusca" alt="Buscar" />
        </div>
        <div class="buttons-user">
            <button>ENTRAR</button>
            <button>CRIAR CONTA</button>
        </div>
        <div class="buttons-event">
            <button>+ CRIAR EVENTO</button>
        </div>
    </header>
    <div class="hamburger-menu">
        <ul>
            <li><a href="index.html">Página Inicial</a></li>
        </ul>
    </div>


  <!--Tudo modificado para meche na nova versao dos eventos -->
     

    <br>
<?php
  while ($row = mysqli_fetch_assoc($all_product)){
?>


   <div class="card">
           <div class="image">
<img src="images/<?php echo  $row["foto"]; ?>"alt="">
</div>
<div class="informaxao">
<p class="product_name"><?php echo $row["nome"];  ?></p>
               <p class="price"><b>$<?php echo $row["diaevento"]; ?></b></p>
               <p class="discount"><b><del>$<?php echo $row["localizacao"]; ?></del></b></p>
               &nbsp; 
</div>

<?php

$select
?>


    
<?php

  }
?>
</div>
  
      





















  


  
  






 

  <!--Retirei o Mapa , inutil nesta pagina !!!-->
  
    
    <footer>
        <div class="footer-container">
            <ul class="footer-links">
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Termos de Uso</a></li>
                <li><a href="#">Política de Privacidade</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
            <p>&copy; Caxias+ 2023 | Plataforma de eventos em Duque de Caxias</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".hamburger-button").click(function () {
                $(".hamburger-menu").toggleClass("show");
            });
        });
    </script>
</body>

</html>