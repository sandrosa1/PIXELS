<?php
date_default_timezone_set('America/Sao_paulo');


//Variaveis declaradas 
$subMenu = '';  // recebe os links das para os sub menus dos portais
$active = '';  //  variavel de comparação da cor ao links (voce pode mudar a cor do link no css/stylus.css)
$novoMenu = '';
//Aqui verifica em qual pagina esta e atribuia as variaveis necessaria para o seu funcionamento dos links



if ($page == 'home') {

    $subMenu = 'PIXELS';
    $active == 'home';
    $novoMenu = 'active1';
}
if ($page == 'animacao') {

    $subMenu = 'Animação Digital';
    $active == 'animacao';
    $novoMenu = "active2";
}
if ($page == 'desenho') {

    $subMenu = 'Desenho Vetorial';
    $active == 'desenho';
    $novoMenu = "active3";
}
if ($page == 'ilustracao') {

    $subMenu = 'Ilustração Digital';
    $active == 'ilustracao';
    $novoMenu = "active4";
}
if ($page == 'modelagem') {

    $subMenu = 'Modelagem 3d';
    $active == 'modelagem';
    $novoMenu = "active5";
}
if ($page == 'pixel') {

    $subMenu = 'Pixel Art';
    $active == 'pixel';
    $novoMenu = "active6";
}
if ($page == 'saiba') {

    $subMenu = 'Saiba Mais';
    $active == 'saiba';
    $novoMenu = "active7";
}
switch ($page) {
    case "home":
        $footer = "homeFooter";
        break;
    case "animacao":
        $footer = "animacaoFooter";
        break;
    case "desenho":
        $footer = "desenhoFooter";
        break;
    case "modelagem":
        $footer = "modelagemFooter";
        break;
    case "ilustracao":
        $footer = "ilustracaoFooter";
        break;
    case "pixel":
        $footer = "pixelFooter";
        break;
    case "saiba":
        $footer = "saibaFooter";
        break;
}

?>
<!--Estamos inciando a tag body nesse include e  está sendo fechado no include nossosLinksBotom -->

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <?php
        if ($page == 'home')
        {
            $display = 'PORTAL PIXELS';
             echo '
        <a class="navbar-brand" href="index.php">
            <img src="imagem/logos/logo500.png" width="30" height="30"
                class="d-inline-block align-top ml-5" alt="">
            PIXELS
        </a>';
        }else{
             echo '
                <a class="navbar-brand" href="../index.php">
                    <img src="../imagem/logos/logo500.png" width="30" height="30"
                        class="d-inline-block align-top" alt="">
                    PIXELS
                </a>';
        }

        ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navlink">
                <li class="nav-item active">
                    <a class="nav-link" href="#conteudo">Ir ao Conteúdo<span class="sr-only">(current)</span></a>
                </li>
        
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Animação
                    </a>
                    <?php 
                    if($page == 'animacao')
                    { 
                        $display = 'ANIMAÇÂO DIGITAL';
                        echo '
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="animacao.php">Animação Digital</a>
                        <a class="dropdown-item" href="animacaoSobre.php">Sobre a arte</a>
                        <a class="dropdown-item" href="animacaoArtistas.php">Artista</a>
                        <a class="dropdown-item" href="animacaoTecnicas.php">Tecnicas</a>
                        <a class="dropdown-item" href="animacaoGaleria.php">Galeria</a>
                    </div>
                </li> ';
                    }elseif($page == 'home'){ echo '
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="animacao/animacao.php">Animação Digital</a>
                            <a class="dropdown-item" href="animacao/animacaoSobre.php">Sobre a arte</a>
                            <a class="dropdown-item" href="animacao/animacaoArtistas.php">Artista</a>
                            <a class="dropdown-item" href="animacao/animacaoTecnicas.php">Tecnicas</a>
                            <a class="dropdown-item" href="animacao/animacaoGaleria.php">Galeria</a>
                        </div>
                    </li> ';

                    }
                    else{ echo '
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../animacao/animacao.php">Animação Digital</a>
                            <a class="dropdown-item" href="../animacao/animacaoSobre.php">Sobre a arte</a>
                            <a class="dropdown-item" href="../animacao/animacaoArtistas.php">Artista</a>
                            <a class="dropdown-item" href="../animacao/animacaoTecnicas.php">Tecnicas</a>
                            <a class="dropdown-item" href="../animacao/animacaoGaleria.php">Galeria</a>
                        </div>
                    </li> ';

                    }
                    ?>

                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Vetorial
                    </a>
                <?php 
                    if($page == 'desenho')
                    { 
                        $display = 'Desenho Vetorial';
                        echo '
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="desenho.php">Desenho Vetorial</a>

                    </div>          </li> ';
                    }elseif($page == 'home'){ echo '
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="desenho/desenho.php">Desenho Vetorial</a>

                        </div>           </li> ';

                    }
                    else{ echo '
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../desenho/desenho.php">Desenho Vetoriall</a>

                        </div>                
                    </li> ';

                    }
                    ?>



                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ilustração
                    </a>
                    <?php 
                    if($page == 'ilustracao')
                    { 
                        $display = 'Ilustração Digital';
                        echo '
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="ilustracao.php">Ilustração Digital</a>
                        <a class="dropdown-item" href="ilustracaoSobre.php">Sobre a arte</a>
                        <a class="dropdown-item" href="ilustracaoArtistas.php">Artista</a>
                        <a class="dropdown-item" href="ilustracaoGaleria.php">Galeria</a>
                    </div>
                </li> ';
                    }elseif($page == 'home'){ echo '
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="ilustracao/ilustracao.php">Ilustração Digital</a>
                            <a class="dropdown-item" href="ilustracao/ilustracaoSobre.php">Sobre a arte</a>
                            <a class="dropdown-item" href="ilustracao/ilustracaoArtistas.php">Artista</a>
                            <a class="dropdown-item" href="ilustracao/ilustracaoGaleria.php">Galeria</a>
                        </div>
                    </li> ';

                    }
                    else{ echo '
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../ilustracao/ilustracao.php">Ilustração Digital</a>
                            <a class="dropdown-item" href="../ilustracao/ilustracaoSobre.php">Sobre a arte</a>
                            <a class="dropdown-item" href="../ilustracao/ilustracaoArtistas.php">Artista</a>
                            <a class="dropdown-item" href="../ilustracao/ilustracaoGaleria.php">Galeria</a>
                        </div>
                    </li> ';

                    }
                    ?>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Modelagem 3D
                    </a>
                    <?php 
                    if($page == 'modelagem')
                    { 
                        $display = 'Modelagem 3D';
                        echo '
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="modelagem.php">Modelagem 3D</a>
                        <a class="dropdown-item" href="modelagemSobre.php">Sobre a arte</a>
                        <a class="dropdown-item" href="modelagemArtistas.php">Artista</a>
                        <a class="dropdown-item" href="modelagemGaleria.php">Galeria</a>
                    </div>
                </li> ';
                    }elseif($page == 'home'){ echo '
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="modelagem/modelagem.php">Modelagem 3D</a>
                            <a class="dropdown-item" href="modelagem/modelagemSobre.php">Sobre a arte</a>
                            <a class="dropdown-item" href="modelagem/modelagemArtistas.php">Artista</a>
                            <a class="dropdown-item" href="modelagem/modelagemGaleria.php">Galeria</a>
                        </div>
                    </li> ';

                    }
                    else{ echo '
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../modelagem/modelagem.php">Modelagem 3D</a>
                            <a class="dropdown-item" href="../modelagem/modelagemSobre.php">Sobre a arte</a>
                            <a class="dropdown-item" href="../modelagem/modelagemArtistas.php">Artista</a>
                            <a class="dropdown-item" href="../modelagem/modelagemGaleria.php">Galeria</a>
                        </div>
                    </li> ';

                    }
                    ?>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pixel
                        </a>
                        <?php 
                    if($page == 'pixel')
                    { 
                        $display = 'Pixel Art';
                        echo '
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="pixel.php">Pixel Art</a>
                        <a class="dropdown-item" href="pixelSobre.php">Sobre a arte</a>
                        <a class="dropdown-item" href="pixelArtistas.php">Artista</a>
                        <a class="dropdown-item" href="pixelGaleria.php">Galeria</a>
                    </div>
                </li> ';
                    }elseif($page == 'home'){ echo '
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="pixel/pixel.php">Pixel Art</a>
                            <a class="dropdown-item" href="pixel/pixelSobre.php">Sobre a arte</a>
                            <a class="dropdown-item" href="pixel/pixelArtistas.php">Artista</a>
                            <a class="dropdown-item" href="pixel/pixelGaleria.php">Galeria</a>
                        </div>
                    </li> ';

                    }
                    else{ echo '
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../pixel/pixel.php">Pixel Art</a>
                            <a class="dropdown-item" href="../pixel/pixelSobre.php">Sobre a arte</a>
                            <a class="dropdown-item" href="../pixel/pixelArtistas.php">Artista</a>
                            <a class="dropdown-item" href="../pixel/pixelGaleria.php">Galeria</a>
                        </div>
                    </li> ';

                    }
                    ?>



                <li class="nav-item dropdown mr-5">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Saiba Mais
                    </a>
                    <?php 
                    if($page == 'saiba')
                    { 
                        $display = 'Saiba Mais';
                        echo '
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="quemSomos.php">Quem Somos</a>
                        <a class="dropdown-item" href="faleConosco.php">Fale Conosco</a>
                        <a class="dropdown-item" href="carreira.php">Carreira</a>
                        <a class="dropdown-item" href="normas.php">Normas</a>
                    </div>
                </li> ';
                    }elseif($page == 'home'){ echo '
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="servicos/quemSomos.php">Quem Somos</a>
                        <a class="dropdown-item" href="servicos/faleConosco.php">Fale Conosco</a>
                        <a class="dropdown-item" href="servicos/carreira.php">Carreira</a>
                        <a class="dropdown-item" href="servicos/normas.php">Normas</a>
                    </div>
                    </li> ';

                    }
                    else{ echo '
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../servicos/quemSomos.php">Quem Somos</a>
                        <a class="dropdown-item" href="../servicos/faleConosco.php">Fale Conosco</a>
                        <a class="dropdown-item" href="../servicos/carreira.php">Carreira</a>
                        <a class="dropdown-item" href="../servicos/normas.php">Normas</a>
                    </div>
                    </li> ';

                    }
                    ?>
            </ul>
        </div>

    </nav>
    <div id="portal" class="row <?= $footer ?>">
        <div class="col-lg-12">
            <p class="h1 text-center fonteh1 pt-1"><?= $display ?></p>
        </div>
    </div>