<?php include 'include/nossosLinksTop.php'; ?>
<?php $page = 'home';
include 'include/header.php'; ?>
<!--A Pagina tem que estar dentro do container-fluid para nõa quebrar-->
<div class="container-fluid container-max mx-auto" id="inicio">
  <!--Chamadas Principais-->
  <article>

    <div id="borda" class="row justify-content-center mt-3 no-margin">
      <div class="col-lg-6 index1">
        <div class="card mb-3 semBordas text-center center-image">
          <img class="card-img-top img-fluid" src="imagem/index/bemvindo.webp" alt="Imagem de boas vindas">
          <h4 class="text-justify pt-2">Bem-vindo ao portal PIXELS. Aqui você fica por dentro de tudo que acontece no mundo das artes digitais.</h4>
        </div>
      </div>
      <div class="col-lg-6 index2 galeria1">
        <div class="card mb-3 semBordas">
          <ul class="list-unstyled">
            <li class="media">
              <a href="desenho/desenho.php" class="card-link linksAnimacao1"><img class="mr-3" src="imagem/index/indexp1.webp" alt="Imagem de exemplo genérica"></a>
              <div class="media-body">
                <small> <a href="desenho/desenho.php" class="card-link linksAnimacao1">#DesenhoVetorial</a></small>
                <h5 class="mt-0 mb-1">
                  <a href="desenho/desenho.php" class="card-link linksAnimacao1 ">Chamada para Desenho Vetorial</a>
                </h5>
              </div>
            </li>
            <li class="media">
              <a href="pixel/pixel.php#programas" class="card-link linksAnimacao1"><img class="mr-3" src="imagem/index/indexp2.webp" alt="Imagem flat de um computador com programa"></a>
              <div class="media-body">
                <small><a href="pixel/pixel.php" class="card-link linksAnimacao1">#PixelArt</a></small>
                <h5 class="mt-0 mb-1">
                  <a href="pixel/pixel.php#programas" class="card-link linksAnimacao1">3 programas gratuitos para você começar sua arte em Pixel</a>
                </h5>
              </div>
            </li>
            <li class="media">
              <a href="modelagem/modelagem.php" class="card-link linksAnimacao1"><img class="mr-3" src="imagem/modelagem/modelagem9.webp" alt="Imagem de exemplo genérica"></a>
              <div class="media-body">
                <small><a href="modelagem/modelagem.php" class="card-link linksAnimacao1">#Modelagem3D</a></small>
                <h5 class="mt-0 mb-1">
                  <a href="modelagem/modelagem.php" class="card-link linksAnimacao1 ">Tudo o que você precisa saber para começar</a>
                </h5>
              </div>
            </li>
            <li class="media">
              <a href="animacao/animacao.php" class="card-link linksAnimacao1"><img class="mr-3" src="imagem/animacao/animacaoWallt.webp" alt="Imagem de exemplo genérica"></a>
              <div class="media-body">
                <small><a href="animacao/animacao.php" class="card-link linksAnimacao1">#AnimaçãoDigital</a></small>
                <h5 class="mt-0 mb-1">
                  <a href="animacao/animacao.php" class="card-link linksAnimacao1 ">Historia, nomes, técnicas e curiosidades do mundo da animação digital</a>
                </h5>
              </div>
            </li>
            <li class="media">
              <a href="ilustracao/ilustracao.php" class="card-link linksAnimacao1"><img class="mr-3" src="imagem/ilustracao-digital/galeria/galeria1.webp" alt="Imagem de exemplo genérica"></a>
              <div class="media-body">
                <small><a href="ilustracao/ilustracao.php" class="card-link linksAnimacao1">#IlustraçãoDigital</a></small>
                <h5 class="mt-0 mb-1">
                  <a href="ilustracao/ilustracao.php" class="card-link linksAnimacao1 ">Tecnologia, inovação, praticidade, diversão e arte. Um mundo de criação</a>
                </h5>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </article>
  
  <!--Calendário-->
  <section class="bg-grey calendario py-4 my-3">
    <div class="row justify-content-center no-margin mt-3">
      <h3 class="text-center">Calendário de Exposições</h3>
    </div>
    <div class="row justify-content-center no-margin my-3">
      <div class="col-lg-6 col-sm-12 col-md-auto text-center d-md-flex flex-md-nowrap justify-content-center">
        <img src="imagem/index/fiesp.webp" class="img-fluid" alt="">
        <img src="imagem/index/indexp7calendario.webp" class="img-fluid calendario-img" alt="calendário de julho">

      </div>
      <div class="col-lg-6 col-sm-12">
        <ul class="list-group list-unstyled p-1">
          <li><time datetime="2020-07-12"><strong>12/07</strong> - Sesi - No céu iluminado </time></li>
          <li><time datetime="2020-07-14"><strong>14/07</strong> - Expo São Paulo - Digital ao quadrado</time></li>
          <li><time datetime="2020-07-18"><strong>18/07</strong> - Fiesp - Natureza Urbana – Riscos e Traços</time></li>
          <li><time datetime="2020-07-27"><strong>27/07</strong></time> - Sesc Paulista - A Biblioteca à Noite</li>
          <li><time datetime="2020-07-27"><strong>27/07</strong></time> - Memorial de Curitiba - Bienal de artes digitais</li>

        </ul>
      </div>
    </div>
  </section>


  <section class="pixel-index mx-auto">
    <?php include 'include/section.php' ?>
  </section>
</div>
<!--FOOTER-->
<?php include 'include/footer.php' ?>
<!--Links botom css -->
<? include 'include/nossosLinksBotom.php'?>