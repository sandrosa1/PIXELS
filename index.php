<?php include 'include/nossosLinksTop.php';?>
<?php $page = 'home'; include 'include/header.php';?>
<!--A Pagina tem que estar dentro do container-fluid para nõa quebrar-->
<div class="container-fluid" id="inicio">
    <!--Inicio do Primeiro Layout-->
    <article>
        <div id="borda" class="row">
            <div class="col-lg-7 indexdiv1">
                <div class="card mb-3">
                    <h1 class="card-title">Bienal de Arte Digital de Curitíba</h1>
                    <img class="card-img-top" src="imagem/indexP.jpg" alt="Imagem de capa do card">
                    <div class="card-body">
                        <p class="card-text">Este é um card maior com suporte a texto embaixo, que funciona como uma
                            introdução a um
                            conteúdo adicional. Este conteúdo é um pouco maior, para demonstração.</p>
                        <a href="#" class="card-link">Mais...</a>
                        <p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 indexdiv2">
                <div class="card mb-3">
                    <ul class="list-unstyled">
                        <li class="media">
                            <img class="mr-3" src="imagem/indexp1.jpg" alt="Imagem de exemplo genérica">
                            <div class="media-body">
                                <h2 class="mt-0 mb-1">Crie seu Desenho Detorial</h2>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                sollicitudin.
                                <a href="#" class="card-link">Saiba Mais</a>
                            </div>
                        </li>
                        <li class="media my-4">
                            <img class="mr-3" src="imagem/indexp2.jpg" alt="Imagem de exemplo genérica">
                            <div class="media-body">
                                <h2 class="mt-0 mb-1">Pixel Art de volta</h2>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                sollicitudin..
                                <a href="#" class="card-link">Saiba Mais</a>
                            </div>
                        </li>
                        <li class="media">
                            <img class="mr-3" src="imagem/indexp3.jpg" alt="Imagem de exemplo genérica">
                            <div class="media-body">
                                <h2 class="mt-0 mb-1">Tecnologia e Ilustração Digital</h2>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                sollicitudin..
                                <a href="#" class="card-link">Saiba Mais</a>
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