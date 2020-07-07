<?php include '../include/nossosLinksTop.php'; ?>
<?php $page = 'pixel';
include '../include/header.php'; ?>
<!--A Pagina tem que estar dentro do container-fluid para nõa quebrar-->
<div class="container-fluid pixel-links my-4" id="inicio">
    <!-- Seção do artigo principal -->
    <article>
        <div class="row justify-content-center m-3">
            <div class="grupo-imagem-titulo col-sm-12 col-md-12 col-lg-12">
                <img class="center-image" src="../imagem/pixel/pixelart-principal882x296.webp" alt="Pixels coloridos">
                <div id="titulo" class="align-items-center">
                    <h1 class="text-center h1-arte">A arte do ponto a ponto</h1>
                </div>
            </div>
        </div>
        <div class="row no-margin justify-content-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <p class="lead pr-2 pl-3"><a class="link-paragrafo" href="pixelSobre.php">O Pixel Art é uma forma de arte digital no qual imagens são criadas a partir de pixels. A técnica surgiu no final da década de 70, mas só teve seu auge na década de 80. </a></p>
            </div>
        </div>
    </article>
    <!-- Seção de artigo secundário -->
    <div class="row no-margin justify-content-center m-3">
        <section class="col-sm-12 col-md-6 col-lg-5 grupo-imagem-secundaria p-3 ">
            <div class="card max-445px mx-auto">
                <img class="card-img-top align-middle" src="../imagem/pixel/pixelforest445.webp" alt="Exposição Pixel-Forest">
                <div class="card-body bg-grey">
                    <h3 class="card-title">Conheça a Pixel Forest</h3>
                    <p class="card-text"><a href="pixelSobre.php#pixelforest">Pipilotti Rist em colaboração com a designer Kaori Kuwabara</a></p>
                </div>
            </div>
        </section>
        <!-- Seção de artigos menores -->
        <section class="col-sm-12 col-md-6 col-lg-7">
            <!-- Cards com artigos menores -->
            <div class="mb-3 bg-grey">
                <h2 class="text-center mt-3 titulo-section-pixel py-2">Fique por dentro</h2>
                <ul class="list-unstyled p-3 sobre-pixel-lista">
                    <li class="media">
                        <img class="mr-3" src="../imagem/pixel/brunoMoraes-thumb.webp" alt="Pixel art de praia do Bruno Moraes">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">O talentoso Bruno Moraes</h5>
                            <a href="pixelArtistas.php?artista=bruno" class="">Ilustrador e programador, começou a trabalhar com ilustração em 2015
                            </a>
                        </div>
                    </li>
                    <li class="media my-2">
                        <img class="mr-3" src="../imagem/pixel/adventuretime-thumb.webp" alt="Pixel art de Ivan Dixon, Adventure Time">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">Saiba sobre Ivan Dixon</h5>
                            <a href="pixelArtistas.php?artista=ivan" class="">Com um currículo de dar inveja, Ivan Dixon possui, parcerias com Disney, os Simpsons e outras grandes</a>
                        </div>
                    </li>
                    <li class="media">
                        <img class="mr-3" src="../imagem/pixel/glauberkotaki110.webp" alt="Pixel art de Glauber Kotaki, cavaleiro com armadura">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">Glauber Kotaki e os jogos</h5>
                            <a href="pixelArtistas.php?artista=glauber" class="">Artista e animador em Pixel Art, ilustra grandes jogos como Rogue Legacy, Chasm, entre outros</a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <!-- Seção com Indicação de Programas -->
    <section id="programas" class="row no-margin
     justify-content-center p-2 programas-links">
        <div class="col-lg-12">
            <div class="bg-grey">
                <h2 class="text-center titulo-section-pixel p-2">Construa seus projetos</h2>
                <p class=" px-5 py-3 ">Selecionamos 3 ferramentas para você iniciar seus projetos em Pixel Art. Tem para todos os gostos: programa para computador, plataforma Online e app para celular. Escolha o seu e divirta-se!</p>
                    <div class="card-deck px-3">
                        <!-- Piskel -->
                        <div class="card mx-1">
                            <h5 class="card-title text-center py-2">Piskel</h5>
                            <img class="card-img-top max-280px d-block mx-auto" src="../imagem/pixel/piskel.webp" alt="Interface do programa Piskel">
                            <div class="card-body">
                                <p class="card-text">Crie sua pixel art com o programa Piskel.</p>
                                <p class="card-text">O Piskel e um editor gratuito para
                                    fazer animação e pixel art. Possui versão para download
                                    (Windows, Linux e Mac OS.X) e
                                    versão online.</p>
                                <p class="card-text">É uma iniciativa Open Source, possui
                                    live preview e galeria privada..</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Acesse: <a href="https://www.piskelapp.com/" target="_blank">piskelapp.com</a></small>
                            </div>
                        </div>
                        <!-- Pixilart -->
                        <div class="card mx-1">
                            <h5 class="card-title text-center py-2">Pixilart</h5>
                            <img class="card-img-top max-280px d-block mx-auto" src="../imagem/pixel/pixilart.webp" alt="Interface do programa Pixilart">
                            <div class="card-body">
                                <p class="card-text"> O Pixilart é uma ferramenta online
                                    e possui app para Android e IOS.</p>
                                <p class="card-text">É gratuito e você pode compartilhar
                                    suas criações na plataforma. Em sua plataforma e possivel se
                                    socializar com otros artistas, reportar ou bloquear.</p>
                                <p class="card-text">A pixilart é uma plataforma para todas as idades.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Acesse: <a href="https://www.pixilart.com/" target="_blank">pixilart.com</a></small>
                            </div>
                        </div>
                        <!-- Pixel Studio -->
                        <div class="card mx-1">
                            <h5 class="card-title text-center py-2">Pixel Studio</h5>
                            <img class="card-img-top max-280px d-block mx-auto" src="../imagem/pixel/pixelstudio.webp" alt="Interface do programa Piskel">
                            <div class="card-body">
                                <p class="card-text">O Pixel Studio é uma ferramenta simples, rápida e portátil.</p>
                                <p class="card-text">Pode ser usada por iniciantes e profissionais. Com ele é possível criar usa pixel art, animações e usar paletas incorporadas dos melhores mestres de pixel art.</p>
                                <p class="card-text">Está disponível na Steam, Adroid e IOS.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Acesse: <a href="https://twitter.com/pixelstudioteam" target="_blank">twitter.com/pixelstudioteam</a></small>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <hr>
    <section class="row justify-content-center no-margin">
        <div class="col-sm-12 col-md-12 col-lg-12  ">
            <?php include '../include/section.php' ?>
        </div>
    </section>
</div>
<?php include '../include/footer.php' ?>
<?php include '../include/nossosLinksBotom.php' ?>