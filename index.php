<?php include 'include/nossosLinksTop.php'; ?>
<?php $page = 'home';
include 'include/header.php'; ?>
<!--A Pagina tem que estar dentro do container-fluid para nõa quebrar-->
<div class="container-fluid" id="inicio">
    <!--Chamadas Principais-->
    <article>
        <div id="borda" class="row justify-content-center m-3">
            <div class="col-lg-6 index1">
                <div class="card mb-3 semBordas center-image text-center">
                    <img class="card-img-top  max-500px" src="imagem/bemVindo.webp" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h4 class="text-left">Bem-vindo ao portal PIXELS. Aqui você fica por dentro de tudo que acontece no mundo das artes digitais.</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 index2 galeria1">
                <div class="card mb-3 semBordas">
                    <ul class="list-unstyled">
                        <li class="media">
                            <a href="desenho/desenho.php" class="card-link linksAnimacao1"><img class="mr-3" src="imagem/indexp1.jpg" alt="Imagem de exemplo genérica"></a>
                            <div class="media-body">
                                <small> <a href="desenho/desenho.php" class="card-link linksAnimacao1">#DesenhoVetorial</a></small>
                                <h5 class="mt-0 mb-1">
                                    <a href="pixel/pixel.php" class="card-link linksAnimacao1 ">Chamada para Desenho Vetorial</a>
                                </h5>
                            </div>
                        </li>
                        <li class="media">
                            <a href="pixel/pixel.php#programas" class="card-link linksAnimacao1"><img class="mr-3" src="imagem/indexp2.jpg" alt="Imagem flat de um computador com programa"></a>
                            <div class="media-body">
                                <small><a href="pixel/pixel.php" class="card-link linksAnimacao1">#PixelArt</a></small>
                                <h5 class="mt-0 mb-1">
                                    <a href="pixel/pixel.php#programas" class="card-link linksAnimacao1">3 programas gratuitos para você começar sua arte em Pixel</a>
                                </h5>
                            </div>
                        </li>
                        <li class="media">
                            <a href="modelagem/modelagem.php" class="card-link linksAnimacao1"><img class="mr-3" src="imagem/modelagem/modelagem9.png" alt="Imagem de exemplo genérica"></a>
                            <div class="media-body">
                                <small><a href="modelagem/modelagem.php" class="card-link linksAnimacao1">#Modelagem3D</a></small>
                                <h5 class="mt-0 mb-1">
                                    <a href="pixel/pixel.php" class="card-link linksAnimacao1 ">Tudo o que você precisa saber para começar</a>
                                </h5>
                            </div>
                        </li>
                        <li class="media">
                            <a href="animacao/animacao.php" class="card-link linksAnimacao1"><img class="mr-3" src="imagem/animacao/animacaoWallt.webp" alt="Imagem de exemplo genérica"></a>
                            <div class="media-body">
                                <small><a href="animacao/animacao.php" class="card-link linksAnimacao1">#AnimaçãoDigital</a></small>
                                <h5 class="mt-0 mb-1">
                                    <a href="pixel/pixel.php" class="card-link linksAnimacao1 ">Historia, nomes, técnicas e curiosidades do mundo da animação digital</a>
                                </h5>
                            </div>
                        </li>
                        <li class="media">
                            <a href="ilustracao/ilustracao.php" class="card-link linksAnimacao1"><img class="mr-3" src="imagem/ilustracao-digital/galeria1.webp" alt="Imagem de exemplo genérica"></a>
                            <div class="media-body">
                                <small><a href="ilustracao/ilustracao.php" class="card-link linksAnimacao1">#IlustraçãoDigital</a></small>
                                <h5 class="mt-0 mb-1">
                                    <a href="pixel/pixel.php" class="card-link linksAnimacao1 ">Tecnologia, inovação, praticidade, diversão e arte. Um mundo de criação</a>
                                </h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </article>
    <!--//////////////////////////////////////                 /////////////////////////////////////////////////////-->
    <!--Chamadas Secundárias-->
    <section class="bg-grey">
        <h3 class="text-center py-3">Você já ouviu falar sobre...</h3>
        <div class="row justify-content-center mx-3">
            <div class="col-lg-3">
                <h4>Calendário de exposições</h4>
                <div class="">
                    <img src="imagem/indexp7calendario.jpg" class="float-md-left float-sm-none" alt="calendário de julho">
                    <p class=""><time datetime="2020-05-14">14/05/2020 - Masp </time></p>

                </div>
            </div>
            <div class="col-lg-4"></div>
            <div class="col-lg-4"></div>

        </div>
    </section>



    <section>
        <?php include 'include/section.php' ?>
    </section>
    <!--////                                                                                                        /-->
</div>
<!--FOOTER-->
<?php include 'include/footer.php' ?>
<!--Links botom css -->
<? include 'include/nossosLinksBotom.php'?>