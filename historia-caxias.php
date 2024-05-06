<!DOCTYPE html>
<html lang="pt-br">

<head>
<title>História de Caxias | Caxias+</title>
  <link rel="icon" type="image/png" href="imagens/favicon.png">
  <link rel="stylesheet" as="style" crossorigin
    href="https://cdnjs.cloudflare.com/ajax/libs/pretendard/1.3.8/static/pretendard.css" />
  <link rel='stylesheet' type="text/css" href='https://fonts.googleapis.com/css?family=Inter'>
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="botoes_carrossel.css">
  <link rel="stylesheet" type="text/css" href="estilo_eventos.css" />

  <!--Dropdown-Menu Link CSS EXTERNO-->
  <link rel="stylesheet" type="text/css" href="DropdownMenu.css">



  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: "Pretendard", "Inter";
      background: url(imagens/fundo1.png);
      background-repeat: repeat;
    }

    #fundo {
      background-color: #f3f3f3;
      width: 95%;
      height: 1780px;
      border-radius: 13px;
      margin: auto;
      margin-top: 5%;
    }

    h2 {
      display: inline-block;
      margin: 2%;
      margin-bottom: 28px;
      font-style: oblique;
      font-size: 28px;
    }

    #text-historia {
      margin-left: 2.5%;
      width: 65%;
      font-weight: 480;
      line-height: 1.5em;
      text-align: justify;
      text-indent: 40px;

    }

    #img1 {
      display: block;
      position: relative;
      width: 100%;
      max-width: 380px;
      margin-left: 105%;
      margin-top: -335px;
      border-radius: 12px 0px 12px 0px;

    }

    #image-centroDC {
      display: block;
      position: relative;
      width: 100%;
      max-width: 380px;
      margin-left: 105%;
      margin-top: -315px;
      border-radius: 12px 0px 12px 0px;
    }

    #image-reduc {
      display: block;
      position: relative;
      width: 100%;
      max-width: 450px;
      margin-left: 102%;
      margin-top: -535px;
      border-radius: 12px 0px 12px 0px;

    }

    #imagem-teatro {
      display: block;
      position: relative;
      width: 100%;
      max-width: 380px;
      margin-left: 105%;
      margin-top: -200px;
      border-radius: 12px 0px 12px 0px;
    }

    #icone-historia {
      font-size: 20px;
      margin-left: -45px;
    }

    #icone-economia {
      font-size: 25px;
      margin-left: -45px;
    }

    #icone-cultura {
      font-size: 25px;
      margin-left: -30px;
    }

    .icone-seta {
      position: absolute;
      padding-top: 1px;
      vertical-align: middle;
      margin-left: -73px;
      font-size: 28px;
    }

    #container {
      display: none;
    }

  @media screen and (min-width: 800px) {
  #fundo {
    width: 100%;
  }
  #text-historia {
      margin-left: 2.1%;
      width: 50%;
      font-weight: 450;
      line-height: 1.5em;
      text-align: justify;
      text-indent: 40px;
  }
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

<div class="search">
    <input class="search-input" type="text" placeholder="Pesquisar eventos...">
    <div class="button-search"> <img src="imagens/pesquisa.png" type="button"
            onclick="TopNavBar.googleSearchSubmit()">
    </div>
</div>

<!--Elementos do cabecalho da página (Botoes de conta e criar evento)-->
<div class="buttons-user">
    <button onclick="window.location.href='login.php'">ENTRAR</button>
    <button onclick="window.location.href='cadastro.php'">CRIAR CONTA</button>
</div>
<div class="buttons-event">
    <button onclick="window.location.href='CriarEventoHome.php'">+ CRIAR EVENTO</button>
</div>


<div class="user-menu">
    <img src="imagens/user.png" class="user-image" width="52px" height="52px" onclick="toggleMenu()"
        style="cursor: pointer;">
</div>

<div class="sub-menu-wrap" id="subMenu">
    <div class="sub-menu">
        <div class="user-info">
            <img src="imagens/user.png">
            <h2>MEU PERFIL</h2>
        </div>
        <hr>

        <a href="#" class="sub-menu-link">
            <p>Gerenciar conta</p>
        </a>


        <a href="#" class="sub-menu-link">
            <p>Modo escuro</p>
        </a>

        <a href="#" class="sub-menu-link">
            <p>Sair</p>
        </a>
    </div>
</div>


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


  <!--História de Duque de Caxias-->



  <div id="fundo">


    <h2 style="color: rgb(68, 74, 80); margin-left: 80px; font-size: 30px;">História de Duque de Caxias</h2>


 


    <div class="container">
      <div id="text-historia">
        <h2 style="font-size: 25px; font-style:normal; margin-bottom: 0px;padding-top: 15px; margin-left:-40px;">•Origem
          e Formação</h2><i id="icone-historia" class="fa-solid fa-book"></i>
        <p> <b>Duque de Caxias é um município localizado na Baixada Fluminense</b>, no estado do Rio de Janeiro, Brasil.
          Sua história remonta ao século XVI, quando foram concedidas terras às margens do rio Iguaçu. A região era
          inicialmente voltada para o cultivo de cana-de-açúcar, além de outros produtos agrícolas como milho, feijão,
          mandioca e arroz. <b>No século XVIII, a região ganhou importância estratégica como rota de escoamento do ouro
            das Minas Gerais e abastecimento da província mineira.</b> A construção de caminhos e estradas ligando a
          região ao Rio de Janeiro fortaleceu sua posição como área de passagem e comércio, sendo muitos estratégica,
          como o caminho de Garcia Pais, que concluiu, em 1704, a primeira ligação direta entre o Rio de Janeiro e
          Minas, os tropeiros – homens que guiavam animais de cargas -, faziam o transporte do ouro e de outras
          mercadorias até o Porto de Pilar.</p>

        <p>O porto destacava-se pela sua posição estratégica, pois ficava à margem do rio de mesmo nome e era navegável
          em cerca de 12 quilômetros. Bernardo Soares de Proença abriu um novo caminho através do Porto da Estrela. Com
          subidas mais suaves e com um percurso menor em quatro dias, Estrela assumiu a rota obrigatória de todas as
          riquezas que circulavam na região. Entre 1761 e 1781, as minas de ouro tiveram uma queda sensível em sua
          produção, mesmo assim, Estrela continuava sendo o principal caminho para o interior. A inauguração da 1ª
          ferrovia brasileira, ligando o <a href="https://estradas-ferro.blogspot.com/p/blog-page.html"> porto de
            Mauá</a> à Estação de Fragoso, em Petrópolis, contribuiu para a mudança da realidade local.</p>

        <img id="img1" src="imagens/Porto Maua.jpg" alt="Porto Mauá - Magé">

        <p style="margin-top:80px">No início do século XX, a Baixada Fluminense, incluindo a região que hoje é Duque de
          Caxias, foi utilizada para aliviar a superpopulação do Rio de Janeiro. A construção da estrada de ferro
          Leopoldina Railway impulsionou o surgimento de vilas e povoados ao redor das estações ferroviárias, levando ao
          desenvolvimento urbano da região.</p>

        <p><b>Em 1943,o município de Duque de Caxias foi criado por meio de um decreto-lei.</b> Desde então, passou por
          um intenso processo de urbanização e desenvolvimento industrial, tornando-se um importante centro urbano da
          Baixada Fluminense.
          Atualmente, Duque de Caxias abriga uma população significativa e desempenha um papel estratégico devido à sua
          localização próxima à cidade do Rio de Janeiro.
          A partir dos anos 1930, durante a era Vargas, o território do atual município de Duque de Caxias experimentou
          intensivo processo de remodelação de sua área, incorporando-se ao modelo urbano-industrial. O desenvolvimento
          pelo qual passava Meriti levou o Deputado Federal Dr. Manoel Reis a propor a criação do Distrito de Caxias.
          Dessa forma, através do Decreto Estadual nº 2.559, de 14 de março de 1931, o Interventor Federal Plínio Casado
          elevou o local a 8º Distrito de Nova Iguaçu.
        </p>

        <img id="image-centroDC" src="imagens/Praça do pacificador.jpg" alt="Porto Mauá - Magé">


        <h2 style="font-size: 25px; font-style:normal; margin-bottom: 0px; padding-top: 28px; margin-left:-5px;">
          •Economia</h2><i id="icone-economia" class="fa-solid fa-hand-holding-dollar"></i>

        <p>No ranking dos municípios que representavam 25% do Produto Interno Bruto (PIB) nacional em 2002, <b>Duque de
            Caxias ocupava a 6ª posição, atrás apenas de São Paulo, Rio de Janeiro, Brasília, Manaus e Belo Horizonte,
            respectivamente</b>. Segundo o relatório publicado pelo IBGE sobre o PIB dos municípios do país em 2004,
          <b>Duque de Caxias ocupava a 7ª posição na região Sudeste</b>, ficando atrás apenas das capitais São Paulo,
          Rio de Janeiro e Belo Horizonte, e dos municípios de Campos, Macaé (RJ) e Guarulhos (SP). O PIB per capita do
          município em 2007 era de R$ 33.398,00.</p>

        <p>Duque de Caxias teve um crescimento significativo a partir do século XX, impulsionado pela instalação de
          indústrias e refinarias de petróleo na região, como a <a
            href="https://petrobras.com.br/quem-somos/refinaria-duque-de-caxias">Refinaria de Duque de Caxias
            (REDUC)</a>, maior responsável pelo processamento de gás natural do Brasil, <b>localizado no seu segundo
            distrito, Jardim Primavera</b>. Contribuindo para o desenvolvimento econômico do Município e para a geração
          de empregos, o município também possui um comércio ativo e uma infraestrutura relativamente desenvolvida.
          Segundo o IBGE, o município de Duque de Caxias registrava o sexto maior PIB (Produto Interno Bruto 1999 -
          2002) no ranking nacional e o segundo maior do estado do Rio de Janeiro, em um total de R$ 14,06 bilhões.</p>

        <p>Atualmente, apesar da pandemia de COVID-19. <b>O PIB da cidade gira em torno de R$ 45,3 milhões, sendo que
            54,4% desse valor advém dos serviços</b>. Está em 19º lugar no ranking dos maiores PIBs do Brasil e o
          terceiro do estado, segundo a lista de 2019 do Instituto Brasileiro de Geografia e Estatística (IBGE). O PIB
          per capita de Duque de Caxias é de R$ 49,3 milhões. Este é um valor superior à média do estado (R$ 45,2
          milhões) e da grande região de Rio de Janeiro (R$ 45,7 milhões). Entre as atividades econômicas, destacam-se
          de forma positiva as atividades de limpeza, comércio atacadista de alimentos e bebidas e a área de construção,
          no setor de obras de infraestrutura. <b>Na cidade estão empresas como Globo, Carrefour, Shell, Petróleo
            Ipiranga, Braskem, White Martins, Indústria Brasileira de Filmes (IBF), Transportes Carvalhão, BRF Brasil
            Foods (Sadia e Perdigão), Via (Casas Bahia e Ponto), Coca-Cola, Magazine Luiza e MRV Engenharia, entre
            outras.</b> O destaque está em seu polo gás-químico, que surgiu estimulado pela presença da REDUC, e conta
          com a Usina Termelétrica a gás natural Governador Leonel Brizola, projetada para ser a maior da América do
          Sul.</p>


        <img id="image-reduc" src="imagens/Reduc.jpg">


        <h3 style="font-size: 25px; font-style:normal; margin-bottom: 0px; padding-top: 260px; display: inline-block;">
          •Cultura</h3><i style="margin-top:250px" id="icone-cultura" class="fa-solid fa-comments"></i>

        <p>Duque de Caxias possui uma diversidade cultural expressiva, com manifestações artísticas e culturais
          presentes na cidade, como o Museu de Duque de Caxias localizado na Taquara. A região também é conhecida por
          abrigar o Parque Natural Municipal da Taquara, que preserva uma área de Mata Atlântica e oferece espaços de
          lazer e contato com a natureza. Além de possuir outros polos culturais como: Igreja Nossa Senhora do
          Pilar,Fazenda de São Bento e Teatro Armando Melo.
          Portanto, com base nesse histórico da cidade é notável que Duque de Caxias tem um grande potencial tanto
          econômico quanto cultural, mas que infelizmente não é aproveitado. A cidade apesar de possuir um grande
          potencial econômico com a presença de indústrias Petroquímicas, Alimentícias, Metalúrgicas e Siderúrgicas,
          infelizmente não investe no setor turístico nem no setor cultural da cidade. </p>

        <img id="imagem-teatro" src="imagens/teatro caxias.jpg">

      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/8016ece9b9.js" crossorigin="anonymous"></script>
    <script>
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