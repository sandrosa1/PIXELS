<?php $page = 'desenho'; include '../include/nossosLinksTop.php' ;?>
<?php $page = 'desenho'; include '../include/header.php';?>
<!--A Pagina tem que estar dentro do container-fluid para nõa quebrar-->
<div class="container-fluid desenho-artistas" id="inicio">
    <article class="row justify-content-center no-margin mt-4">
        <div class="col-sm-12 col-md-10 col-lg-9 ">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="vetor-tab" data-toggle="tab" href="#vetor" role="tab"
                        aria-controls="vetor" aria-selected="true">Entenda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="galeria_vetor-tab" data-toggle="tab" href="#galeria_vetor" role="tab"
                        aria-controls="galeria_vetor" aria-selected="false">Galeria</a>
                </li>
            </ul>

            <div class="tab-content mt-5" id="myTabContent">
                <!-- vetor -->
                <div class="tab-pane fade show active  text-center" id="vetor" role="tabpanel"
                    aria-labelledby="vetor-tab">
                    <h3 id="conteudo" class="pb-5">O que é um desenho vetorial?</h3>
                    <img src="../imagem/vetor/gears-5193383.webp" class="float-sm-none float-md-left mr-3"
                        alt="Foto de demonstração de objetos vetores - Retirado Pixabay">
                    <div class="text-justify">

                        <p>Os vetores surgiram há muito tempo, muito antes da invenção do computador. Em toda a história
                            a humanidade já estuda as formas geométricas, que consolidou o conceito hoje conhecido como
                            grandeza vetorial (Grandeza vetorial é tudo aqui que pode ser medido e necessita de uma
                            direção e sentido).</p>
                        <p>Este entendimento possui aplicação em diversas áreas de conhecimento, como Física, Geometria,
                            Medicina e a Astronomia, mas vamos utilizar o conceito visual do uso de vetores.</p>
                        <p>As imagens vetoriais digitais vistas hoje nas telas de computador, por volta da década de
                            1950, foram utilizadas nos primeiros videogames e nas imagens dos radares mostradas em
                            monitores da Força Aérea. Pouco depois, a GM em parceria com a IBM desenvolveu o primeiro
                            programa CAD (Computer Aided Design), para ensinar engenheiros da companhia a desenhar
                            automóveis. O Sketchpad foi o primeiro software vetorial que era possível fazer desenhos a
                            traço e trata-los individualmente.</p>
                        <p>Sendo assim, desenho vetorial utiliza formas primitivas geométricas como pontos, linhas
                            curvas e formas, baseadas em expressões matemáticas para demonstrar uma imagem em computação
                            gráfica.</p>
                        <p>Como vimos, desenhos vetoriais são baseados em vetores, estes desenhos são controlados por
                            pontos de controle, onde cada um desses pontos possui uma posição definida nos eixos x e y
                            no plano de trabalho e determinam a direção do caminho. Portanto cada caminho pode ser
                            atribuído uma cor de traço, forma e espessura e preenchimento. Portanto essas propriedades
                            não aumentam o tamanho dos arquivos de maneira substancial, mas sim, apenas as informações
                            que residem na estrutura do documento.</p>

                        <div class="row my-5">
                            <div class="card-deck mx-auto">
                                <div class="card" id="diferencas">
                                    <img class="card-img-top rounded" src="../imagem/vetor/ship-5268224.webp"
                                        alt="Desenho vetorial em preto e branco. Um barco em auto mar afundando com pessoas e cavalos ao mar. ">
                                    <div class="card-body">
                                        <h5 class="card-title text-center py-1 bg-white">Qual seu diferencial?</h5>

                                        <p class="text-justify card-text bg-white px-2">Antes de tudo, é necessário
                                            explicar que existem dois tipos de imagens: as vetoriais, já explicadas, e
                                            as raster, ou imagens de mapa de bits (bitmap).</p>
                                        <p class="text-justify card-text bg-white px-2">A diferença crucial entre elas
                                            está na estrutura: enquanto imagens vetoriais baseiam-se em cálculos
                                            matemáticos para serem feitas, as raster são divididas em milhares de
                                            pixels, onde cada unidade guarda um tom de cor específico.</p>
                                        
                                        <h5 class="card-title text-center py-1 bg-white">Quais suas vantagens?</h5>

                                        <p class="text-justify card-text bg-white px-2">O fato de serem calculadas
                                            matematicamente as torna escaláveis, ou seja, é possível aumentar ou
                                            diminuir suas dimensões sem perda de qualidade, ao contrário de imagens
                                            bitmap, que apresentam serrilhados e perda de definição assim que
                                            redimensionadas.</p>

                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top rounded" src="../imagem/vetor/SW.webp" alt="Imagem vetorial do personagem do filme Star Wars, Kylo Ren usando capa e segurando sabre de luz.">
                                    <div class="card-body">
                                        <h5 class="card-title text-center py-1 bg-white">Software que manipulam imagens
                                            vetoriais?</h5>
                                        <p class="text-justify card-text bg-white px-2">A seguir alguns softwares que
                                            conseguem criar imagens vetoriais.</p>
                                        <ul class="list-group-item list-group-item-light">
                                            <li class="list-group-item"> <a class="nav-link"
                                                    href="https://www.adobe.com/br/products/illustrator.html">Adobe
                                                    Illustrator</a></li>
                                            <li class="list-group-item"> <a class="nav-link"
                                                    href="https://www.coreldraw.com/">CorelDraw</a></li>
                                            <li class="list-group-item"> <a class="nav-link"
                                                    href="https://inkscape.org/pt-br/">Inkscape</a></li>
                                            <li class="list-group-item"> <a class="nav-link"
                                                    href="http://www.autodesk.com.br">AutoCAD</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-5">
                            <div class="card-deck mx-auto">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title text-center py-1 bg-white">Instagram</h5>
                                        <p class="text-justify card-text bg-white px-2">Aqui temos algumas hashtag do
                                            Instagram para você seguir e descobrir mais sobre essas imagens.</p>
                                        <ul class="list-group-item list-group-item-light">
                                            <li class="list-group-item"> <a class="nav-link"
                                                    href="https://www.instagram.com/explore/tags/vectorart/">#vectorart</a>
                                            </li>
                                            <li class="list-group-item"> <a class="nav-link"
                                                    href="https://www.instagram.com/explore/tags/vector/">#vector</a>
                                            </li>
                                            <li class="list-group-item"> <a class="nav-link"
                                                    href="https://www.instagram.com/explore/tags/vectorillustration/?hl=pt-br">#vectorillustration</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title text-center py-1 bg-white">Youtube</h5>
                                        <p class="text-justify card-text bg-white px-2">Aqui temos algumas canais no
                                            Youtube para você aprender mais sobre desenhos vetoriais.</p>
                                        <ul class="list-group-item list-group-item-light">
                                            <li class="list-group-item"> <a class="nav-link"
                                                    href="https://www.youtube.com/channel/UC6Gx2a-nui8O9bJLOCbuh5A">Sublinhando</a>
                                            </li>
                                            <li class="list-group-item"> <a class="nav-link"
                                                    href="https://www.youtube.com/channel/UC7mzPc6HICOhTNCz5EsZjXA">Buz
                                                    Sheep</a></li>
                                            <li class="list-group-item"> <a class="nav-link"
                                                    href="https://www.youtube.com/channel/UCMwzyeXlK39IdpliwN_Mhjw">Hudson
                                                    Tutoriais</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Galeria -->
                <div class="tab-pane fade  text-center" id="galeria_vetor" role="tabpanel"
                    aria-labelledby="galeria_vetor-tab">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="text-center m-3">Galeria de Artes</h1>
                            <p class="text-center m-3">Confira a seleção de imagens de diversos artistas.</p>
                        </div>
                        <section class="galeria-pixel   mx-auto">
                            <div class="row no-margin text-center justify-content-center">

                                <div class="ilust">
                                    <div class="align-self-end overlay">
                                        <figure>
                                            <img class="img-fluid img-thumbnail"
                                                src="../imagem/vetor/robot-in-space-4556429.webp"
                                                alt="Desenho vetorial de um robô no espaço segurando balões em forma de planetas. Retirado de www.pixabay.com">
                                        </figure>
                                    </div>
                                    <div class="align-self-end overlay">
                                        <figure>
                                            <img class="img-fluid align-self-center img-thumbnail"
                                                src="../imagem/vetor/amsterdam-4167026.webp"
                                                alt="Desenho vetorial de 5 casas com 4 andares geminadas. Retirado de www.pixabay.com">
                                        </figure>
                                    </div>
                                    <div class="align-self-end overlay">
                                        <figure>
                                            <img class="img-fluid img-thumbnail"
                                                src="../imagem/vetor/background-5389532.webp"
                                                alt="Desenho abstrato com muitas cores. Retirado de www.pixabay.com">
                                        </figure>
                                    </div>
                                </div>
                                <div class="ilust">
                                    <div class="align-self-end overlay">
                                        <figure>
                                            <img class="img-fluid img-thumbnail" src="../imagem/vetor/fish-33712.webp"
                                                alt="Desenho vetorial de um peixe de cor verde azulado. Retirado de www.pixabay.com">
                                        </figure>
                                    </div>
                                    <div class="align-self-end overlay">
                                        <figure>
                                            <img class="img-fluid img-thumbnail" src="../imagem/vetor/lion-5391996.webp"
                                                alt="Desenho vetorial de um leão deitado, em preto e branco. Retirado de www.pixabay.com">
                                        </figure>
                                    </div>
                                    <div class="align-self-end overlay">
                                        <figure>
                                            <img class="img-fluid img-thumbnail"
                                                src="../imagem/vetor/office-2319299.webp"
                                                alt="Desenho vetorial em 2D, com árvores, mesa, computador e um pássaro. Retirado de www.pixabay.com">
                                        </figure>
                                        <figure>
                                    </div>
                                    <div class="align-self-center overlay">
                                        <img class="img-fluid img-thumbnail"
                                            src="../imagem/vetor/great-wall-of-china-154648.webp"
                                            alt="Desenho vetorial da muralha da china. Retirado de www.pixabay.com">
                                        </figure>
                                    </div>
                                </div>
                                <div class="ilust">
                                    <div class="align-self-end overlay ">
                                        <figure>
                                            <img class="img-fluid align-self-center img-thumbnail"
                                                src="../imagem/vetor/hud-3149462.webp"
                                                alt="Desenho vetorial da visão frontal de uma lente de câmera. Retirado de www.pixabay.com">
                                        </figure>
                                    </div>
                                    <div class="align-self-end overlay">
                                        <figure>
                                            <img class="img-fluid img-thumbnail"
                                                src="../imagem/vetor/joystick-2389216.webp"
                                                alt="Desenho vetorial de um joystick. Retirado de www.pixabay.com">
                                        </figure>
                                    </div>

                                    <div class="align-self-end overlay">
                                        <figure>
                                            <img class="img-fluid img-thumbnail" src="../imagem/vetor/castle-23204.webp"
                                                alt="Desenho vetorial de um castelo em 2D. Retirado de www.pixabay.com">
                                        </figure>
                                    </div>


                                </div>
                                <div class="ilust">
                                    <div class="align-self-end overlay ">
                                        <figure>
                                            <img class="img-fluid align-self-center img-thumbnail"
                                                src="../imagem/vetor/ekg-5052162.webp"
                                                alt="Desenho vetorial de 3 linhas distintas de frequência e 3 contornos guitarras feito com estas linha. Retirado de www.pixabay.com">
                                        </figure>
                                    </div>
                                    <div class="align-self-end overlay">
                                        <figure>
                                            <img class="img-fluid img-thumbnail" src="../imagem/vetor/covid-5247929.webp"
                                                alt="Desenho vetorial de profissionais da saúde com máscaras. Retirado de www.pixabay.com">
                                        </figure>
                                    </div>
                                    <div class="align-self-end overlay">
                                        <figure>
                                            <img class="img-fluid img-thumbnail"
                                                src="../imagem/vetor/colosseum-295080.webp"
                                                alt="Imagem vetorial do Coliseu, como se fosse uma pintura colorida. Retirado de www.pixabay.com">
                                        </figure>
                                    </div>

                                </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>

<?php include '../include/footer.php'?>
<?php include '../include/nossosLinksBotom.php' ?>