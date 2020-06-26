<?php include '../include/nossosLinksTop.php'; ?>
<?php $page = 'pixel';
include '../include/header.php'; ?>
<!--A Pagina tem que estar dentro do container-fluid para nõa quebrar-->
<div class="container-fluid" id="inicio">
    <!-- Seção do artigo principal -->
    <article>
        <div class="row justify-content-center m-3">
            <div class="grupo-imagem-titulo col-sm-12 col-md-12 col-lg-12">
                <img class="center-image" src="../imagem/pixelart-principal882x296.png" alt="Pixels coloridos">
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
        <section class="col-sm-12 col-md-12 col-lg-5 grupo-imagem-secundaria p-3">
            <img class="center-image" src="../imagem/pixel-forest.png" alt="Exposição Pixel-Forest">
            <div class="bg-grey col-lg-12 pt-3 pb-2">
                <h3><a href="pixelGaleria.php#pixelforest">Conheça a Pixel Forest</a></h3>
                <p class="sub-titulo">Exposição do artista suiço Pipilotti Rist em colaboração com a designer Kaori Kuwabara... <a href="pixelGaleria.php#pixelforest" class="">Saiba Mais</a></p>
            </div>
        </section>
        <!-- Seção de artigos menores -->
        <section class="col-sm-12 col-md-12 col-lg-7 pl-5 p-3">
            <!-- Cards com artigos menores -->
            <div class="card mb-3">
                <h2 class="text-center mt-3">Destaques</h2>
                <ul class="list-unstyled p-3">
                    <li class="media">
                        <img class="mr-3" src="../imagem/brunoMoraes-01-thumb.png" alt="Imagem de exemplo genérica">
                        <div class="media-body  col-sm-12">
                            <h4 class="mt-0 mb-1">O talentoso Bruno Moraes</h4>
                             Ilustrador e programador, começou a trabalhar com ilustração em 2015...
                            <a href="#" class="card-link">Saiba Mais</a>
                        </div>
                    </li>
                    <li class="media my-4">
                        <img class="mr-3" src="../imagem/ivandixon-01-thumb.png" alt="Imagem de exemplo genérica">
                        <div class="media-body">
                            <h4 class="mt-0 mb-1">Pixel Art de volta</h4>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                            sollicitudin..
                            <a href="#" class="card-link">Saiba Mais</a>
                        </div>
                    </li>
                    <li class="media">
                        <img class="mr-3" src="imagem/indexp3.jpg" alt="Imagem de exemplo genérica">
                        <div class="media-body">
                            <h4 class="mt-0 mb-1">Tecnologia e Ilustração Digital</h4>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                            sollicitudin..
                            <a href="#" class="card-link">Saiba Mais</a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</div>
<?php include '../include/footer.php' ?>
<?php include '../include/nossosLinksBotom.php' ?>