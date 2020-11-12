<?php $page = 'pixel'; include '../include/nossosLinksTop.php'; ?>
<?php $page = 'pixel'; include '../include/header.php'; ?>
<!--A Pagina tem que estar dentro do container-fluid para nõa quebrar-->
<div class="container-fluid pixel-links container-max mx-auto" id="inicio">
    <article class="row justify-content-center no-margin mt-4 pixel-artistas">
        <div class="col-lg-12">
            <div class="d-flex"  role="navigation">
                <ul class="nav nav-tabs mx-auto" id="myTab" role="tablist">
                <li class="nav-item mx-2 mx-md-3">
                        <a class="nav-link px-md-5 px-3" id="artistas-tab" data-toggle="tab" href="#artistas" role="tab" aria-controls="artistas" aria-selected="true">Artistas</a>
                    </li>
                    <li class="nav-item mx-2 mx-md-3">
                        <a class="nav-link px-md-5 px-3" id="glauber-tab" data-toggle="tab" href="#glauber" role="tab" aria-controls="glauber" aria-selected="true">Glauber</a>
                    </li>
                    <li class="nav-item mx-2 mx-md-3">
                        <a class="nav-link px-md-5 px-3" id="bruno-tab" data-toggle="tab" href="#bruno" role="tab" aria-controls="bruno" aria-selected="false">Bruno</a>
                    </li>
                    <li class="nav-item mx-2 mx-md-3">
                        <a class="nav-link px-md-5 px-3" id="ivan-tab" data-toggle="tab" href="#ivan" role="tab" aria-controls="ivan" aria-selected="false">Ivan</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content my-5" id="myTabContent">
                <!-- Conheça artistas -->
                <div class="tab-pane fade show active" id="artistas" role="tabpanel" aria-labelledby="artistas-tab">
                
                    <div class=" text-justify px-sm-2">
                        <h2 id="conteudo" class="text-center h1-arte">Principais Nomes</h2>
                        <p class="pt-3">Ao redor do mundo, muitos artistas nacionais e internacionais fazem parte de uma comunidade que não deixam a Pixel Art morrer. </p>
                        <p>Não se restringindo somente ao universo dos games, a arte quebrou barreiras e se deu muito bem em campanhas publicitárias e identidades visuais.</p>
                        <p class="mb-5">Para que você fique por dentro dessa tendência, selecionamos alguns artistas que produzem artes incríveis com a pixel art. Inspire-se e comece a criar você também!!!</p>
                    </div>
                </div>

                <!-- Glauber Kotaki -->
                <div class="tab-pane fade text-center 
                <?php
                if ($_GET['artista'] === 'glauber') {
                    echo 'show active';
                }
                ?>
                " id="glauber" role="tabpanel" aria-labelledby="glauber-tab">
                    <img src="../imagem/pixel/glauber200.webp" class="float-sm-none float-md-left my-3 mx-2" alt="Foto de rosto do artista de pixel art Glauber Kotaki">
                    <div class="text-justify pt-3">
                        <div class="px-2">
                            <h2 class="text-center text-md-left">Glauber Kotaki</h2>
                            <p>Glauber Kotaki é um notável e talentoso artista brasileiro.</p>
                            <p>Formado em Design Digital, descobriu a pixel art por acaso, quando criança. E na época era apenas um hobby.</p>
                            <p>Por ter familiares envolvidos com desenho - arquitetos, sempre teve este apoio em casa.</p>
                            <p>Desenvolveu um jogo com um amigo, mas esse jogo nunca foi lançado. E em paralelo sempre postava suas artes na internet. Até quando foi chamado para estagiar em uma empresa para trabalhar com arte, onde fazia jogos online, pixel arte entre outras atividades. Quando saiu da empresa se tornou freelancer focando mais em arte para games.</p>
                            <p>Em seu currículo constam jogos como Rogue Legacy 2, Rogue Legacy, 30XX, Duelyst, Full Metal Furies, Deep Dungeons of Doom. </p>
                            <p>Suas referências mais fortes vem de animes como o 'Dragon Ball Z' e jogos, como o 'Megaman X4'.</p>
                        </div>

                        <section id="programas" class="row no-margin
     justify-content-center mt-4">
                            <div>
                                <div class="pb-4 row no-margin">
                                    <div class="d-flex flex-wrap">
                                        <!-- Rogue Legacy -->
                                        <div class="col-sm-12 col-md-12 col-lg-4 mb-3">
                                            <div class="text-center">
                                                <img class="img-fluid float-sm-none float-md-left float-lg-none mx-lg-auto mr-2 mb-2" src="../imagem/pixel/rogue-legacy.webp" alt="Tela do jogo Rogue Legacy">
                                                <div class="pl-md-3 pr-md-0 pr-lg-3 px-2">
                                                    <h5 class="text-center">Rogue Legacy</h5>
                                                    <hr class="mx-auto d-md-none d-lg-block">
                                                    <p class="text-justify ">Lançado em 2013, Rogue Legacy se tornou um dos jogos independentes mais queridos na época, colocando o jogador no controle de toda uma linhagem de guerreiros que se aventuram em um castelo, batalhando contra diferentes chefes.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Deep Dungeons of Doom -->
                                        <div class="col-sm-12 col-md-12 col-lg-4 mb-3">
                                            <div class="text-center">
                                                <img class="img-fluid float-sm-none float-md-left float-lg-none mx-lg-auto mr-2 mb-2" src="../imagem/pixel/deepdungeons.webp" alt="Tela do jogo Deep dungeos of doom">
                                                <div class="pl-md-3 pr-md-0 pr-lg-3 px-2">
                                                    <h5 class="text-center">Deep Dungeons of Doom</h5>
                                                    <hr class="mx-auto d-md-none d-lg-block">
                                                    <p class="text-justify ">Lançado em 2013, o Deep Dungeons of Doom é um jogo de RPG. O jogador pode escolher entre 3 personagens para batalhar. Cada batalha é necessário vencer inimigos descobrindo métodos de combate e fraquezas. A medida que se aprofunda no jogo, os desafios são maiores.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Duelyst -->
                                        <div class="col-sm-12 col-md-12 col-lg-4 mb-3">
                                            <div class="text-center">
                                                <img class="img-fluid float-sm-none float-md-left float-lg-none mx-lg-auto mr-2 mb-2" src="../imagem/pixel/duelyst.webp" alt="Tela do jogo Duelyst">
                                                <div class="pl-md-3 pr-md-0 pr-lg-3 px-2">
                                                    <h5 class="text-center">Duelyst</h5>
                                                    <hr class="mx-auto d-md-none d-lg-block">
                                                    <p class="text-justify ">Lançado em 2016, o Duelyst é um jogo de estratégia competitiva, focada em combate tático, a base construção de decks. As batalhas são 1 contra 1 em turnos, entre oponentes online. As batalhas não duram mais de 10 minutos, e o objetivo é acabar com a vida do oponente.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <div class="text-center mb-5 ">
                            <p class="link-site">Conheça mais trabalhos visitando o site de <a href="https://glauberkotaki.com/" target="_blank">Glauber Kotaki</a></p>
                        </div>
                    </div>
                </div>
                <!-- Fim Glauber -->

                <!-- Bruno Moraes -->
                <div class="tab-pane fade text-center 
                <?php
                if ($_GET['artista'] === 'bruno') {
                    echo 'show active';
                }
                ?>
                " id="bruno" role="tabpanel" aria-labelledby="bruno-tab">
                    <img src="../imagem/pixel/brunomoraes200.webp" class="float-sm-none float-md-left my-3 mx-2" alt="Foto de rosto do artista de pixel art Bruno Moraes">
                    <div class="text-justify pt-3">
                        <div class="px-2">
                            <h2 class="text-center text-md-left">Bruno Moraes</h2>
                            <p>Bruno Moraes é ilustrador e programador nascido em Niterói.</p>
                            <p>Entrou para o mundo de artes digitais em 2015, quando começou a trabalhar com ilustrações.</p>
                            <p>Entretanto, a brincadeira começou bem antes, quando aos 10 anos de idade criava seus próprios projetos pixel art modificando os jogos de pokémon.</p>
                            <p>Bruno visualiza o pixel art, como uma maneira menos complexa de ver as coisas. Os ângulos ortogonais e isométricos e perspectivas simples dão ao trabalho um aspecto de organização e tranquilidade.</p>
                            <p>Entre suas inspirações, encontra-se nomes como Lucile Patron, Octavi Navarro e Paul Robertson.</p>
                            <p>Em seu trabalho, Bruno faz representações de ícones da cultura pop, princesas disney, personagens de games e cria ilustrações baseadas em fotografias.</p>
                        </div>

                        <section id="programas" class="row no-margin
     justify-content-center mb-4">
                            <div>
                                <div class="pb-4 row no-margin">
                                    <div class="d-flex flex-wrap">
                                        <!-- Pokémon -->
                                        <div class="col-sm-12 col-md-12 col-lg-4 mb-3">
                                            <div class="text-center">
                                                <img class="img-fluid float-sm-none float-md-left float-lg-none mx-lg-auto mr-2 mb-2" src="../imagem/pixel/pokemon.webp" alt="Pokemón sun e pokemón moon">
                                                <div class="pl-md-3 pr-md-0 pr-lg-3 px-2">
                                                    <h5 class="text-center">Pokémon</h5>
                                                    <hr class="mx-auto d-md-none d-lg-block">
                                                    <p class="text-justify">Bruno começou a trilhar pelo pixel art fazendo modificações de jogos, como o pokemón.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- David Bowie -->
                                        <div class="col-sm-12 col-md-12 col-lg-4 mb-3">
                                            <div class="text-center">
                                                <img class="img-fluid float-sm-none float-md-left float-lg-none mx-lg-auto mr-2 mb-2" src="../imagem/pixel/galeria/galeria-13.webp" alt="David Bowie em pixel art">
                                                <div class="pl-md-3 pr-md-0 pr-lg-3 px-2">
                                                    <h5 class="text-center">David Bowie</h5>
                                                    <hr class="mx-auto d-md-none d-lg-block">
                                                    <p class="text-justify ">Pixel art criada em tributo a David Bowie. Após ser noticiada a morte do cantor.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Mini Praia -->
                                        <div class="col-sm-12 col-md-12 col-lg-4 mb-3">
                                            <div class="text-center">
                                                <img class="img-fluid float-sm-none float-md-left float-lg-none mx-lg-auto mr-2 mb-2" src="../imagem/pixel/praia.webp" alt="Mini praia em pixel art">
                                                <div class="pl-md-3 pr-md-0 pr-lg-3 px-2">
                                                    <h5 class="text-center">Mini praia</h5>
                                                    <hr class="mx-auto d-md-none d-lg-block">
                                                    <p class="text-justify">Bruno criou essa arte praia em 2017 para o dia dos namorados. Esta imagem, na realidade é uma animação, que é possível ver em seu <a href="https://brunopixels.tumblr.com/post/157235426332" target="_blank">portfolio</a>.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <div class="text-center my-5 ">
                            <p class="link-site">Conheça mais trabalhos visitando o site de <a href="https://brunopixels.tumblr.com/" class="programas-links" target="_blank">Bruno Moraes</a></p>
                        </div>
                    </div>
                </div>
                <!-- Fim Bruno -->


                <!-- Ivan Dixon -->
                <div class="tab-pane fade text-center 
                <?php
                if ($_GET['artista'] === 'ivan') {
                    echo 'show active';
                }
                ?>
                " id="ivan" role="tabpanel" aria-labelledby="ivan-tab">
                    <img src="../imagem/pixel/ivandixon200.webp" class="float-sm-none float-md-left my-3 mx-2" alt="Foto de rosto do artista de pixel art Ivan Dixon">
                    <div class="text-justify pt-3">
                        <div class="px-2">
                            <h2 class="text-center text-md-left">Ivan Dixon</h2>
                            <p>Ivan Dixon é um pixel artista, ilustrador, animador e também faz games. Mora em Melbourne, Austrália.</p>
                            <p>Pixel art foi a primeira arte que aprendeu a animar. E acha relaxante criar arte em pixel.</p>
                            <p>Em parceria com Paul Robertson, que também é pixel artista, fizeram a abertura do programa The Simpsons e postaram no youtube. Em um dia tiveram um milhão de acessos.</p>
                            <p>Após tamanha repercussão, os produtores do programa enviaram um e-mail perguntando se poderiam usear a entrada para passar na abertura do programa. A visibilidade deles aumentou e tiveram oportunidade de visitar a Fox em Los Angeles.</p>
                            <p>Com Paul, Ivan produziu material para Rick & Morty, Adventure Time e The Simpsons.</p>
                            <p>Em sociedade com Greg Sharp, são diretores da Rubber House - situada em Sydney e Melbourne - e produziram uma variedade de conteúdos para a Cartoon Network, Nickelodeaon, Disney, Warner Bros entre outros. </p>
                        </div>

                        <section id="programas" class="row no-margin
     justify-content-center mb-4">
                            <div>
                                <div class="pb-4 row no-margin my-3">
                                    <div class="d-flex flex-wrap">
                                        <!-- Adventure Time-->
                                        <div class="col-sm-12 col-md-12 col-lg-4">
                                            <div class="text-center">
                                                <img class="img-fluid float-sm-none float-md-left float-lg-none mx-lg-auto mr-2 mb-2" src="../imagem/pixel/adventuretime.webp" alt="Imagem do desenho Adventure Time">
                                                <div class="pl-md-3 pr-md-0 pr-lg-3 px-2">
                                                    <h5 class="text-center">Adventure Time</h5>
                                                    <hr class="mx-auto d-md-none d-lg-block">
                                                    <p class="text-justify">Abertura para o desenho Adventure Time feita por Ivan em parceria com Paul Robertson.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Simpsons -->
                                        <div class="col-sm-12 col-md-12 col-lg-4">
                                            <div class="text-center">
                                                <img class="img-fluid float-sm-none float-md-left float-lg-none mx-lg-auto mr-2 mb-2" src="../imagem/pixel/simpsons.webp" alt="Bart em pixel art escrevendo na lousa">
                                                <div class="pl-md-3 pr-md-0 pr-lg-3 px-2">
                                                    <h5 class="text-center">The Simpsons</h5>
                                                    <hr class="mx-auto d-md-none d-lg-block">
                                                    <p class="text-justify ">Abertura feita em pixel art, foi ao ar no episódio 14 da 26ª temporada.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Corsodyl -->
                                        <div class="col-sm-12 col-md-12 col-lg-4">
                                            <div class="text-center">
                                                <img class="img-fluid float-sm-none float-md-left float-lg-none mx-lg-auto mr-2 mb-2" src="../imagem/pixel/corsodyl.webp" alt="Propaganda de pasta de dentes. Homem loiro escovando os dentes em pixel art">
                                                <div class="pl-md-3 pr-md-0 pr-lg-3 px-2">
                                                    <h5 class="text-center">Corsodyl</h5>
                                                    <hr class="mx-auto d-md-none d-lg-block">
                                                    <p class="text-justify">Publicidade para a marca de pastas de dente britânica Corsodyl.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <div class="text-center mt-2 mb-5">
                            <p class="link-site">Conheça mais trabalhos visitando o site de <a href="https://www.ivandixon.com/" target="_blank">Ivan Dixon</a></p>
                        </div>
                    </div>
                </div>
                <!-- Fim Ivan -->
            </div>
        </div>
    </article>
    <hr>

        <?php include '../include/section.php' ?>

</div>
<?php include '../include/footer.php' ?>
<?php include '../include/nossosLinksBotom.php' ?>