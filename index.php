<?php include 'include/nossosLinksTop.php';?>
<?php $page = 'home'; include 'include/header.php';?>
<!--A Pagina tem que estar dentro do container-fluid para nõa quebrar-->
<div class="container-fluid" id="inicio">
    <!--Inicio do Primeiro Layout-->
    <article>
        <div id="borda" class="row justify-content-center m-3">
            <div class="col-lg-7  index1" >
                <div class="card mb-3 semBordas center-image">
                    <img class="card-img-top" src="imagem/animacao/bemVindo.webp" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class=" text-left">Sejá Bem vindo ao portal PIXELS. Aqui você fica por dentro de tudo que acontece no mundo das artes digitais.</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 index2 galeria1">
                <div class="card mb-3 semBordas">
                    <ul class="list-unstyled">
                        <li class="media">
                        <a href="desenho/denho.php" class="card-link linksAnimacao1"><img class="mr-3" src="imagem/indexp1.jpg" alt="Imagem de exemplo genérica">
                            <div class="media-body">
                                <h2 class="mt-0 mb-1">Crie seu Desenho Detorial</h2>
                                Sem assuntos para comentar<b>Saiba Mais...</b></a>
                            </div>
                        </li>
                        <li class="media ">
                        <a href="pixel/pixel.php" class="card-link linksAnimacao1"><img class="mr-3" src="imagem/indexp2.jpg" alt="Imagem de exemplo genérica">
                            <div class="media-body">
                            <h2 class="mt-0 mb-1">Pixalart</h2>
                                O Pixilart é uma ferramenta online e possui app para Android e IOS <b>Saiba Mais...</b></a>
                            </div>
                        </li>
                        <li class="media">
                        <a href="modelagem/modelagem.php" class="card-link linksAnimacao1"><img class="mr-3" src="imagem/modelagem/modelagem9.png" alt="Imagem de exemplo genérica">
                            <div class="media-body">
                            <h2 class="mt-0 mb-1">Modelagem 3D</h2>
                                Tudo o que você precisa saber para começar <b>Saiba Mais...</b></a>
                            </div>
                            </li>
                            <li class="media">
                            <a href="animacao/animacao.php" class="card-link linksAnimacao1"><img class="mr-3" src="imagem/animacao/animacaoWallt.webp" alt="Imagem de exemplo genérica">
                            <div class="media-body">
                            <h2 class="mt-0 mb-1">Animação Digital</h2>
                                Historia, nomes, técnicas e curiosidas do mundo da animação digital <b>Saiba Mais...</b></a>
                            </div>
                        </li>
                        <li class="media">
                            <a href="ilustracao/ilustracao.php" class="card-link linksAnimacao1"><img class="mr-3" src="imagem/ilustracao-digital/galeria1.webp" alt="Imagem de exemplo genérica">
                            <div class="media-body">
                            <h2 class="mt-0 mb-1">Ilustração Digital</h2>
                            Tecnologia, inovação, praticidade, diversão e arte. Um mundo de criação.<b>Saiba Mais...</b></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </article>
    <!--//////////////////////////////////////                 /////////////////////////////////////////////////////-->
    <!--Inicio do segundo Layout 2 colunas-->
    <section>
        <?php include 'include/section.php'?>
    </section>
    <!--////                                                                                                        /-->
</div>
<!--FOOTER-->
<?php include 'include/footer.php'?>
<!--Links botom css -->
<? include 'include/nossosLinksBotom.php'?>