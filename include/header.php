<?php
date_default_timezone_set('America/Sao_paulo');

// Esse array recebe os links somente para o nav do index
$links = [
    ['PIXELS','index.php','home' ],                                    //0
    ['Animação Digital','animacao/animacao.php','animacao'],           //1
    ['Desenho Vetorial','desenho/desenho.php','desenho'],              //2
    ['Ilustração Digital','ilustracao/ilustracao.php','ilustracao'],   //3
    ['Modelagem 3d','modelagem/modelagem.php','modelagem'],            //4
    ['Pixel Art','pixel/pixel.php','pixel'],                          //5
    ['Saiba Mais','servicos/saibaMais.php','saiba']                    //6
    
];

//Esse array recebe os links para as demais paginas 
$links2 = [
    ['PIXELS','../index.php','home'],                                    //0
    ['Animação Digital','../animacao/animacao.php','animacao'],          //1
    ['Desenho Vetorial','../desenho/desenho.php','desenho'],             //2
    ['Ilustração Digital','../ilustracao/ilustracao.php','ilustracao'],  //3
    ['Modelagem 3d','../modelagem/modelagem.php','modelagem'],           //4
    ['Pixel Art','../pixel/pixel.php','pixel'],                         //5
    ['Saiba Mais','../servicos/saibaMais.php','saiba']                   //6
];
// Esse array recebe os links somente para o saiba mais do  nav do index
$saiDrop = [
    'Saiba Mais'=> 'saibaMais.php',       //0
    'Quem Somos?'=>'quemSomos.php',       //1
    'Fale Cosnosco'=>'faleConosco.php',   //2
    'Carreira'=>'carreira.php',  //3
    'Nomas'=>'normas.php'                 //
];
//Menu para animacao digital aqui o editor dessa area nomeia a pagina e atribui um endereço a ela, siga o padrão 
//Anexe quantas paginas precisar
$aniDrop = [
    'Animação Digital'=>'animacao.php',      //0
    'Sobre a Arte'=>'animacaoSobre.php',     //1
    'Artistas'=>'animacaoArtistas.php',      //2
    'Galeria'=>'animacaoGaleria.php'         //3
];

//Menu para desenho vetorial aqui o editor dessa area nomeia a pagina e atribui um endereço a ela, siga o padrão 
//Anexe quantas paginas precisar
$desDrop = [
    'Desenho Vetorial'=>'desenho.php',        //0
    'Sobre a Arte'=>'desenhoSobre.php',       //1
    'Artistas'=>'desenhoArtistas.php',        //2
    'Galeria'=>'desenhoGaleria.php'           //3
];
//Menu para ilustração aqui o editor dessa area nomeia a pagina e atribui um endereço a ela, siga o padrão 
//Anexe quantas paginas precisar
$iluDrop = [
    'Ilustração Digital'=>'ilustracao.php',  //0
    'Sobre a Arte'=>'ilustracaoSobre.php',   //1
    'Artista'=>'ilustracaoArtistas.php',     //2
    'Galeria'=>'ilustracaoGaleria.php'       //3
];
//Menu para modelagemaqui o editor dessa area nomeia a pagina e atribui um endereço a ela, siga o padrão 
//Anexe quantas paginas precisar
$modDrop = [
   'Modelagem 3d'=>'modelagem.php',          //0
   'Sobre a Arte'=>'modelagemSobre.php',     //1
   'Artistas'=>'modelagemArtistas.php',      //2
   'Galeria'=>'modelagemGaleria.php'         //3
];
//Menu para pixel aqui o editor dessa area nomeia a pagina e atribui um endereço a ela, siga o padrão 
//Anexe quantas paginas precisar
$pixDrop = [
    'Pixel Art'=>'pixel.php',            //0
    'Sobre a Arte'=>'pixelSobre.php',     //1
    'Artistas'=>'pixelArtistas.php',      //2
    'Galeria'=>'pixelGaleria.php'         //3
];


//Variaveis declaradas 
$subMenu = '';  // recebe os links das para os sub menus dos portais
$active = '';  //  variavel de comparação da cor ao links (voce pode mudar a cor do link no css/stylus.css)

//Aqui verifica em qual pagina esta e atribuia as variaveis necessaria para o seu funcionamento dos links
if($page == 'home')
{

    $menu = $links;  
    $subMenu = 'PIXELS';
    $active == 'home';
    
}
if($page == 'animacao')
{

    $menu = $links2;
    $subMenu = 'Animação Digital';
    $dropMenu = $aniDrop;
    $active == 'animacao';

}
if($page == 'desenho')
{

    $menu = $links2;
    $subMenu = 'Desenho Vetorial';
    $dropMenu = $desDrop;
    $active == 'desenho';   
}
if($page == 'ilustracao')
{

    $menu = $links2;
    $subMenu = 'Ilustração Digital';
    $dropMenu = $iluDrop;
    $active == 'ilustracao';   
}
if($page == 'modelagem')
{

    $menu = $links2;
    $subMenu = 'Modelagem 3d';
    $dropMenu = $modDrop;
    $active == 'modelagem';   
}
if($page == 'pixel')
{

    $menu = $links2;
    $subMenu = 'Pixel Art';
    $dropMenu = $pixDrop;
    $active == 'pixel';   
}
if($page == 'saiba')
{

    $menu = $links2;
    $subMenu = 'Saiba Mais';
    $dropMenu = $saiDrop;
    $active == 'saiba'; 
}
switch($page)
{
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
    <nav class="d-flex bd-highlight navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand" href="<?php 
        if($page == 'home')
        {
            echo 'index.php';
        }else
        {
            echo'../index.php';
        }
        
        ?>">
        <!--O index e a unica pagina que esta na raiz então esse if e para mostrar o caminho do logo para todas as outras -->
        <img src="
        <?php if($page =='home')
        { 
            echo 'imagem/logo500.png';
        }else
        { 
            echo'../imagem/logo500.png';
        }

        ?>" alt="Logo" style=" width:80px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">

            <!--Este for acessa o a variavel menu e cria o nav-->
            <ul class=" navbar-nav p-2 flex-fill bd-highlight">
        <?php

        // 7 e a quantidade de links nas Paginas Principais
        for($i = 0; $i < 7; $i++ )
        {
            // Se A variaval submenu for igual a pagina atual cria seu dropdown 
            if($subMenu == $menu[$i][0])
            { 
                $display = $menu [$i][0];
                // Aqui ele exclui o nome home, pois ja temos a imagem logo
                if($menu[$i][0] == $menu[0][0]);
                else
                {
                    echo'<li id="'.$menu[$i][2].'"class="nav-item dropdown p-2 flex-fill bd-highlight">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            '.$menu[$i][0].'
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">';
                            
                            // Aqui esta sendeo  criando seus links
                        foreach($dropMenu as $subName => $subAdress)
                        {
                            echo '<a class="dropdown-item" href="'.$subAdress.'">'.$subName.'</a>';
                        }

                        echo '</div>
                        </li>';
                }
            }
            
            // Se A variaval submenu for difernte da pagina atual cria seu link
            
            if($subMenu != $menu[$i][0])
            {      // Aqui ele exclui o nome home
                if($menu[$i][0] == $menu[0][0]);
                else
                {
                echo '<li id="'.$menu[$i][2].'"class=" nav-item p-2 flex-fill bd-highlight">
                        <a class="nav-link" href="'.$menu[$i][1].'">'.$menu[$i][0].'</a>
                    </li>';
                }
            }
        }
    ?>             
            </ul>
        </div>
    </nav>
    <div id="portal"class="row <?=$footer?>">
        <div class=" col-lg-12" ><h1><p class="text-center"><?= $display?></p></h1>
        </div>
    </div>
