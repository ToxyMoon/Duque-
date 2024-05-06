<?php
session_start();
include('criareventoconexao.php');
// error_reporting(0);


$usuario = $_SESSION['usuario'];


$select = mysqli_query($conexao, "SELECT * FROM `cadastro` WHERE usuario = '$usuario'") or die('query failed');
if(mysqli_num_rows($select) > 0){
   $fetch = mysqli_fetch_array($select);
}


if (isset($_POST['submit'])){

$nomeevento = $_POST['nome'];
$descricaoevento = $_POST['areadetexto'];
$diaevento = $_POST['dia_evento'];

$entradaevento = $_POST['horaentrada'];
$saidaevento = $_POST['fimentrada'];

$localizacao = $_POST['localizacao'];
$foto= $_POST['picture__input'];


//envia os dados para o Banco
$result = "INSERT INTO dados_eventos(nome_evento,descrição_evento,dia_evento,horainicio,horafim,localizacao,foto) VALUES('$nomeevento','$descricaoevento',$diaevento,'$entradaevento','$saidaevento','$localizacao','$foto')";

$resultado = mysqli_query($conexao, $result);

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<!--CSS do carrossel de imagens, caixas de eventos e puxar CSS externos para outros elementos-->

<head>
  <title>Criar Evento | Caxias+</title>


  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/ef2f298dff.js" crossorigin="anonymous"></script>
  <link rel="icon" type="image/png" href="imagens/favicon.png">
  <link rel="stylesheet" as="style" crossorigin
    href="https://cdnjs.cloudflare.com/ajax/libs/pretendard/1.3.8/static/pretendard.css" />
  <link rel='stylesheet' type="text/css" href='https://fonts.googleapis.com/css?family=Inter'>
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/pretendard/1.3.8/static/pretendard.css" />
    <link rel="stylesheet" href="estilo_eventos.css">

    <!-- Dropdwon CSS link -->
    <link rel="stylesheet" href="DropdownCSS.css">

  <!--Retirado Link de Carrosel para colocar esse acima -->
  <link rel="stylesheet" type="text/css" href="botoes_carrossel.css">
  <link rel="stylesheet" type="text/css" href="estilo_eventos.css" />

  <style>
    .Evento_Presencial {
      max-width: 1390px;
      height: 100px;
      margin: 100px auto;
      background-color: #ffffff;
      border-radius: 5px;
      text-align: center;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);
      padding: 20px;
      margin-top: 30px;
      margin-bottom: 35px;
      color: #000000;
    }

    .event-container {
      max-width: 800px;
      height: 1690px;
      margin: 100px auto;
      background-color: #ffffff;
      border-radius: 10px;
      text-align: center;
      box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.25);
      padding: 20px;
      margin-top: -25px;
      margin-bottom: 35px;
      color: #000000;
      margin-top: 5%;
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
      width: 70%;
      border-radius: 20px;
      margin-bottom: 16px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);
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
      text-decoration-color: #ff5e1e;

    }

    .mapa img {
      width: 300%;
      max-width: 600px;
      border-radius: 20px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);
      margin-top: 10px;
    }


    .evento-titulo {
      margin-left: 68px;
      text-align: left;
    }

    .evento-descricao {
      margin-left: 10px;
    }

    .mapa-da-google {
      margin-left: 2px;
    
      
    }
    
    .localização_evento{
      display: grid;
      grid-template-columns: repeat(1, 1fr);
    }

    .Galeria-Caixa {
      background-color: #ffffff;
      width: 310px;
      height: 295px;
      margin-top: -1890px;
      margin-left: 378px;
    }

    /*Pesquisar Imagens e abri imagens*/
    #picture__input {
      display: none;
    }

    .picture {
      width: 400px;
      aspect-ratio: 16/9;
      background: #ddd;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #aaa;
      border: 2px dashed currentcolor;
      cursor: pointer;
      font-family: sans-serif;
      transition: color 300ms ease-in-out, background 300ms ease-in-out;
      outline: none;
      overflow: hidden;
    }

    .picture:hover {
      color: #777;
      background: #ccc;
    }

    .picture:active {
      border-color: turquoise;
      color: turquoise;
      background: #eee;
    }

    .picture:focus {
      color: #777;
      background: #ccc;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    .picture__img {
      max-width: 100%;
    }

    #btn-enviar {
    background-color: #bbbbbb;
    color: #050505;
    font-weight: bold;
    font-family: inherit;
    cursor: pointer; 
    border: none;
    font-size: 15px;
    width: 180px;
    height: 45px;
    margin: 40%;
    margin-top: 8%;
    border-radius: 28px;
    transition: background-color 0.2s ease, color 0.2s ease;
  }

  #btn-enviar:hover {
    background-color: #2196F3;
    color: #ffffff;
  }

  footer {
    margin-top: 5%;
  }

  .classifica_eventos{
    padding-right: 75%;
    margin-top: -5%;

  }

  .data_horario{
    padding-top: 2%;
    padding-bottom: 2%;
  
  }

  .horario_evento{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
  }



    /*fim de pesquisar imagens*/
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

     <div class="logo">
      <img src="imagens/logo.png" alt="Logo do site">
    </div> 
  </header>

  <!--Elementos do menu hamburger-->
  <div class="hamburger-menu">
    <div class="hamburger-link" onclick="window.location.href='index.php'">
      <img class="hamburger-icons" src="imagens/home.png" width="24px" height="24px">
      <div class="hamburger-text">Página inicial</div>
    </div>

    <div class="hamburger-link" onclick="window.location.href='Historia Caxias Nathan.html'">
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
    <div class="hamburger-link" onclick="window.location.href='sobre.html'">
      <img class="hamburger-icons" src="imagens/info.png" width="24px" height="24px">
      <div class="hamburger-text">Sobre nós</div>
    </div>

    <div class="hamburger-link" onclick="window.location.href='FAQ.html'">
      <img class="hamburger-icons" src="imagens/FAQ.png" width="24px" height="24px">
      <div class="hamburger-text">Dúvidas frequentes</div>
    </div>
  </div>

  <!--Criar Evento!!!-->]

  <div class="Evento_Presencial">
    <br>

    <h2>Criar Evento Presencial &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button>Publicar evento</button>&nbsp; &nbsp;
      <button>Salvar evento</button>&nbsp; &nbsp;
      <button>Salvar rascunho</button>
    </h2>

  </div>

  <div class="event-container">
    <!--Tudo modificado para meche na nova versao dos eventos -->

    <div class="buy-ticket-container">
    </div>


    <div class="evento-descricao">

      <h2>
        <p style="text-align: left;"> 1º Informações básicas </p>
      </h2>

      <form method="POST" action="painel_eventos.php">
        <h4>
          <p style="text-align: left;"> Nome do Evento :<br> 
          
        <input style="border-radius:5px; height:25px; width:220px; border-style:double; margin-right: 12px;" type="text" id="nome" name="nome" placeholder="Insira o nome de evento..."> </p>
        </h5>

        <h4>
          <p style="text-align: left;"> Classifique seu evento : </p>
        </h4>


        <h5>
          <p style="text-align: left;"> Categoria : <br>

            <select name="TiposEvento" id="TipoEv">
              <br>
              <option value="menos">Esportivo</option>
              <option value="zero">Social</option>
              <option value="UM">Corporativo</option>
              <option value="DOIS">Festival</option>
              <option value="TRES">Religioso</option>
              <option value="QUATRO">Ação Social</option>
            </select>

          </p>
        </h5>

        <h5>
          <p style="text-align: left;"> Assunto : <br>
            <select name="Tiposdeassunto" id="TipoEv">
              <br>

              <option value="menos">casa</option>
              <option value="zero">sitio</option>
              <option value="UM">cinema</option>
              <option value="DOIS">rua</option>
              <option value="TRES">local alugado</option>

            </select>
          </p>
        </h5>

        <h4>
          <p style="text-align: left; font-size:medium; margin-top:5%;">Descrição do Evento:</p>
        </h4>
        <p style="text-align: left;">
          <textarea name="areadetexto" id="areaTexto" style=" resize:horizontal;" rows="15" cols="100" maxlength="1500"></textarea>
        </p>

        <h5><p style="text-align: left; font-size:medium;">Classificação do Evento :</p></h5>
        <br>

      <div class="classifica_eventos">
        <input type="radio" name="Classificação" values="Lv" id="publico" />Livre P/Todos
        <br>
        <input type="radio" name="Classificação" value="18+" id="maiores" />P/Maiores
        <br>
        <!--só ficar tudo na mesma formataçao quando tudo estar dentro desse <p inicial n sei pq  -->
        </div>



        <div class="data_horario">
        <h2>
          <p style="text-align: left;"> 2º Data e horario </p>
        </h2>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr);"  class="dia_evento">
        <p style="text-align: left;"> Dia do Evento :<br>
         <input type="date" id="" name="dia_evento" placeholder="Sabado..."> </p>
         </div>
          </div>


        <!--problema aqui !!!!!-->
        <div class="horario_evento">
          <p style="text-align: left;"> Horário de Entrada: <input type="time" id="nome" name="horaentrada"
              placeholder="00/00..."> </p>
          <p style="text-align: left;">Horário de Saida : <input type="time" id="nome" name="fimentrada" placeholder="00/00...">
          </p>
          </div>
          

          <h2>
            <p style="text-align: left;"> 3º Localização </p>
          </h2>
          <h4>
            <p style="text-align: left; font-size:large;">Insira a Localização do seu Evento! </p>
          </h4>

          <div style="display: grid; grid-template-columns: repeat(1, 1fr);" class="localização_evento"> 
          <p style="text-align: left; font-size:large;"> Localizaçao do Evento : <br> 
          <input type="text" id="nome" name="localizacao" placeholder="Insira a localização..."> </p>
          </div>

          <div class="mapa-da-google">
            <p style="text-align: left;"> <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14702.180701612!2d-43.31074545691894!3d-22.893254069395066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997d070e398159%3A0x9e05df3c77e2e376!2sEst%C3%A1dio%20Ol%C3%ADmpico%20Nilton%20Santos!5e0!3m2!1spt-BR!2sbr!4v1696986279522!5m2!1spt-BR!2sbr"
                width="100%" height="310px" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe></p>
          </div>


          <p style="text-align: left;">
            <br>
            <input type="submit" name="submit" id="btn-enviar" value="ENVIAR"> 
          </p>
    </div>

    <div class="Galeria-Caixa">
      <label class="picture" for="picture__input" tabIndex="0"> <span class="picture__image"></span>
      </label>

      <input type="file" name="picture__input" id="picture__input">
    </div>
    </form>
  </div>
  <br>
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

    $(document).ready(function () {
      $(".hamburger-button").click(function () {
        $(".hamburger-menu").toggleClass("show");
      });
    });
  </script>
  <script>
    const inputFile = document.querySelector("#picture__input");
    const pictureImage = document.querySelector(".picture__image");
    const pictureImageTxt = "escolha uma imagem";
    pictureImage.innerHTML = pictureImageTxt;

    inputFile.addEventListener("change", function (e) {
      const inputTarget = e.target;
      const file = inputTarget.files[0];

      if (file) {
        const reader = new FileReader();

        reader.addEventListener("load", function (e) {
          const readerTarget = e.target;

          const img = document.createElement("img");
          img.src = readerTarget.result;
          img.classList.add("picture__img");

          pictureImage.innerHTML = "";
          pictureImage.appendChild(img);
        });

        reader.readAsDataURL(file);
      } else {
        pictureImage.innerHTML = pictureImageTxt;
      }
    });  
  </script>






</body>

</html>