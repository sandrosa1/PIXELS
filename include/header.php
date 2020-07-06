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
    'Quem Somos?'=>'quemSomos.php',       //1
    'Fale Cosnosco'=>'faleConosco.php',   //2
    'Carreira'=>'carreira.php',  //3
    'Nomas'=>'normas.php'                 //
];
$saiDrop2 =  [
    'Quem Somos?'=>'servicos/quemSomos.php',       //1
    'Fale Cosnosco'=>'servicos/faleConosco.php',   //2
    'Carreira'=>'servicos/carreira.php',  //3
    'Nomas'=>'servicos/normas.php'                 //
];
$saiDrop3 = [
    'Quem Somos?'=>'../servicos/quemSomos.php',       //1
    'Fale Cosnosco'=>'../servicos/faleConosco.php',   //2
    'Carreira'=>'../servicos/carreira.php',  //3
    'Nomas'=>'../servicos/normas.php'                 //
];
//Menu para animacao digital aqui o editor dessa area nomeia a pagina e atribui um endereço a ela, siga o padrão 
//Anexe quantas paginas precisar
$aniDrop = [
    'Animação Digital'=>'animacao.php',      //0
    'Sobre a Arte'=>'animacaoSobre.php',     //1
    'Técnicas de Animação'=>'animacaoTecnicas.php',    //2
    'Principais Nomes'=>'animacaoArtistas.php',      //3
    'Galeria'=>'animacaoGaleria.php'         //4
];
$aniDrop2 = [
    'Animação Digital'=>'animacao/animacao.php',      //0
    'Sobre a Arte'=>'/animacaoanimacaoSobre.php',     //1
    'Técnicas de Animação'=>'animacao/animacaoTecnicas.php',    //2
    'Principais Nomes'=>'animacao/animacaoArtistas.php',      //3
    'Galeria'=>'animacao/animacaoGaleria.php'         //4
];
$aniDrop3 = [
    'Animação Digital'=>'../animacao/animacao.php',      //0
    'Sobre a Arte'=>'../animacao/animacaoSobre.php',     //1
    'Técnicas de Animação'=>'../animacao/animacaoTecnicas.php',    //2
    'Principais Nomes'=>'../animacao/animacaoArtistas.php',      //3
    'Galeria'=>'../animacao/animacaoGaleria.php'         //4
];


//Menu para desenho vetorial aqui o editor dessa area nomeia a pagina e atribui um endereço a ela, siga o padrão 
//Anexe quantas paginas precisar
$desDrop = [
    'Desenho Vetorial'=>'desenho.php',        //0
    'Sobre a Arte'=>'desenhoSobre.php',       //1
    'Artistas'=>'desenhoArtistas.php',        //2
    'Galeria'=>'desenhoGaleria.php'           //3
];
$desDrop2 = [
    'Desenho Vetorial'=>'desenho/desenho.php',        //0
    'Sobre a Arte'=>'desenho/desenhoSobre.php',       //1
    'Artistas'=>'desenho/desenhoArtistas.php',        //2
    'Galeria'=>'desenho/desenhoGaleria.php'           //3
];
$desDrop3 = [
    'Desenho Vetorial'=>'../desenho/desenho.php',        //0
    'Sobre a Arte'=>'../desenho/desenhoSobre.php',       //1
    'Artistas'=>'../desenho/desenhoArtistas.php',        //2
    'Galeria'=>'../desenho/desenhoGaleria.php'           //3
];
//Menu para ilustração aqui o editor dessa area nomeia a pagina e atribui um endereço a ela, siga o padrão 
//Anexe quantas paginas precisar
$iluDrop = [
    'Ilustração Digital'=>'ilustracao.php',  //0
    'Sobre a Arte'=>'ilustracaoSobre.php',   //1
    'Artista'=>'ilustracaoArtistas.php',     //2
    'Galeria'=>'ilustracaoGaleria.php'       //3
];
$iluDrop2 = [
    'Ilustração Digital'=>'ilustracao/ilustracao.php',  //0
    'Sobre a Arte'=>'ilustracao/ilustracaoSobre.php',   //1
    'Artista'=>'ilustracao/ilustracaoArtistas.php',     //2
    'Galeria'=>'ilustracao/ilustracaoGaleria.php'       //3
];
$iluDrop3 = [
    'Ilustração Digital'=>'../ilustracao/ilustracao.php',  //0
    'Sobre a Arte'=>'../ilustracao/ilustracaoSobre.php',   //1
    'Artista'=>'../ilustracao/ilustracaoArtistas.php',     //2
    'Galeria'=>'../ilustracao/ilustracaoGaleria.php'       //3
];
//Menu para modelagemaqui o editor dessa area nomeia a pagina e atribui um endereço a ela, siga o padrão 
//Anexe quantas paginas precisar
$modDrop = [
   'Modelagem 3d'=>'modelagem.php',          //0
   'Sobre a Arte'=>'modelagemSobre.php',     //1
   'Artistas'=>'modelagemArtistas.php',      //2
   'Galeria'=>'modelagemGaleria.php'         //3
];
$modDrop2 = [
    'Modelagem 3d'=>'modelagem/modelagem.php',          //0
    'Sobre a Arte'=>'modelagem/modelagemSobre.php',     //1
    'Artistas'=>'modelagem/modelagemArtistas.php',      //2
    'Galeria'=>'modelagem/modelagemGaleria.php'         //3
 ];
 $modDrop3 = [
    'Modelagem 3d'=>'../modelagem/modelagem.php',          //0
    'Sobre a Arte'=>'../modelagem/modelagemSobre.php',     //1
    'Artistas'=>'../modelagem/modelagemArtistas.php',      //2
    'Galeria'=>'../modelagem/modelagemGaleria.php'         //3
 ];
//Menu para pixel aqui o editor dessa area nomeia a pagina e atribui um endereço a ela, siga o padrão 
//Anexe quantas paginas precisar
$pixDrop = [
    'Pixel Art'=>'pixel.php',            //0
    'Sobre a Arte'=>'pixelSobre.php',     //1
    'Artistas'=>'pixelArtistas.php',      //2
    'Galeria'=>'pixelGaleria.php'         //3
];
$pixDrop2 = [
    'Pixel Art'=>'pixel/pixel.php',            //0
    'Sobre a Arte'=>'pixel/pixelSobre.php',     //1
    'Artistas'=>'pixel/pixelArtistas.php',      //2
    'Galeria'=>'pixel/pixelGaleria.php'         //3
];
$pixDrop3 = [
    'Pixel Art'=>'../pixel/pixel.php',            //0
    'Sobre a Arte'=>'../pixel/pixelSobre.php',     //1
    'Artistas'=>'../pixel/pixelArtistas.php',      //2
    'Galeria'=>'../pixel/pixelGaleria.php'         //3
];


//Variaveis declaradas 
$subMenu = '';  // recebe os links das para os sub menus dos portais
$active = '';  //  variavel de comparação da cor ao links (voce pode mudar a cor do link no css/stylus.css)
$novoMenu = '';
//Aqui verifica em qual pagina esta e atribuia as variaveis necessaria para o seu funcionamento dos links



if($page == 'home')
{

    $menu = $links;  
    $subMenu = 'PIXELS';
    $active == 'home';
    $novoMenu = 'active1';
    
}
if($page == 'animacao')
{

    $menu = $links2;
    $subMenu = 'Animação Digital';
    $dropMenu = $aniDrop;
    $active == 'animacao';
    $novoMenu = "active";
    

}
if($page == 'desenho')
{

    $menu = $links2;
    $subMenu = 'Desenho Vetorial';
    $dropMenu = $desDrop;
    $active == 'desenho'; 
    $novoMenu = "active" ;
}
if($page == 'ilustracao')
{

    $menu = $links2;
    $subMenu = 'Ilustração Digital';
    $dropMenu = $iluDrop;
    $active == 'ilustracao'; 
    $novoMenu = "active";  
}
if($page == 'modelagem')
{

    $menu = $links2;
    $subMenu = 'Modelagem 3d';
    $dropMenu = $modDrop;
    $active == 'modelagem'; 
    $novoMenu = "active" ; 
}
if($page == 'pixel')
{

    $menu = $links2;
    $subMenu = 'Pixel Art';
    $dropMenu = $pixDrop;
    $active == 'pixel'; 
    $novoMenu = "active";  
}
if($page == 'saiba')
{

    $menu = $links2;
    $subMenu = 'Saiba Mais';
    $dropMenu = $saiDrop;
    $active == 'saiba'; 
    $novoMenu = "active";
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
    <nav>
        <div class="topnav1" id="myTopnav1">
            <a href="<?php 
                if($page == 'home')
                {
                    echo 'index.php';
                }else
                {
                    echo'../index.php';
                }
                
                ?>" class=" <?php echo $novoMenu; ?>"><img src="
                <?php if($page =='home')
                { 
                    echo 'imagem/logo500.png';
                }else
                { 
                    echo'../imagem/logo500.png';
                }

                ?>" alt="Logo" style=" width:50px;"></a>

                <?php
                if($page == 'animacao') 
                {
                    echo '<div class="dropdown1">
                    <button class="dropbtn1 <?php echo $novoMenu; ?>">Animação Digital 
                    <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content1">';
                    foreach($aniDrop as $subName => $subAdress)
                    {
                    echo ' <a href="'.$subAdress.'">'.$subName.'</a>';
                    }
                    echo '</div>
                    </div> ';
                }
                else
                {
                    if($page == 'home') 
                    {
                        echo '<div class="dropdown1">
                        <button class="dropbtn1 <?php echo $novoMenu; ?>">Animação Digital 
                        <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content1">';
                        foreach($aniDrop2 as $subName => $subAdress)
                        {
                            echo '<a href="'.$subAdress.'">'.$subName.'</a>';
                        }
                        echo '</div>
                        </div> ';
                    }else
                    {
                        echo '<div class="dropdown1">
                        <button class="dropbtn1 <?php echo $novoMenu; ?>">Animação Digital 
                        <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content1">';
                        foreach($aniDrop3 as $subName => $subAdress)
                        {
                            echo '<a href="'.$subAdress.'">'.$subName.'</a>';
                        }
                        echo '</div>
                        </div> ';
                    }
                }
                if($page == 'desenho') 
                {
                    echo '<div class="dropdown1">
                    <button class="dropbtn1 <?php echo $novoMenu; ?>">Desenho Vetorial 
                    <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content1">';
                    foreach($desDrop as $subName => $subAdress)
                    {
                    echo ' <a href="'.$subAdress.'">'.$subName.'</a>';
                    }
                    echo '</div>
                    </div> ';
                }
                else
                {
                    if($page == 'home') 
                    {
                        echo '<div class="dropdown1">
                        <button class="dropbtn1 <?php echo $novoMenu; ?>">Desenho Vetorial  
                        <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content1">';
                        foreach($desDrop2 as $subName => $subAdress)
                        {
                            echo '<a href="'.$subAdress.'">'.$subName.'</a>';
                        }
                        echo '</div>
                        </div> ';
                    }else
                    {
                        echo '<div class="dropdown1">
                        <button class="dropbtn1 <?php echo $novoMenu; ?>">Desenho Vetorial  
                        <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content1">';
                        foreach($desDrop3 as $subName => $subAdress)
                        {
                            echo '<a href="'.$subAdress.'">'.$subName.'</a>';
                        }
                        echo '</div>
                        </div> ';
                    }
                }
                if($page == 'ilustracao') 
                {
                    echo '<div class="dropdown1">
                    <button class="dropbtn1 <?php echo $novoMenu; ?>">Ilustração Digital 
                    <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content1">';
                    foreach($iluDrop as $subName => $subAdress)
                    {
                    echo ' <a href="'.$subAdress.'">'.$subName.'</a>';
                    }
                    echo '</div>
                    </div> ';
                }
                else
                {
                    if($page == 'home') 
                    {
                        echo '<div class="dropdown1">
                        <button class="dropbtn1 <?php echo $novoMenu; ?>">Ilustração Digital 
                        <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content1">';
                        foreach($iluDrop2 as $subName => $subAdress)
                        {
                            echo '<a href="'.$subAdress.'">'.$subName.'</a>';
                        }
                        echo '</div>
                        </div> ';
                    }else
                    {
                        echo '<div class="dropdown1">
                        <button class="dropbtn1 <?php echo $novoMenu; ?>">Ilustração Digital 
                        <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content1">';
                        foreach($iluDrop3 as $subName => $subAdress)
                        {
                            echo '<a href="'.$subAdress.'">'.$subName.'</a>';
                        }
                        echo '</div>
                        </div> ';
                    }
                }
                if($page == 'modelagem') 
                {
                    echo '<div class="dropdown1">
                    <button class="dropbtn1 <?php echo $novoMenu; ?>">Modelagem 3D 
                    <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content1">';
                    foreach($modDrop as $subName => $subAdress)
                    {
                    echo ' <a href="'.$subAdress.'">'.$subName.'</a>';
                    }
                    echo '</div>
                    </div> ';
                }
                else
                {
                    if($page == 'home') 
                    {
                        echo '<div class="dropdown1">
                        <button class="dropbtn1 <?php echo $novoMenu; ?>">Modelagem 3D 
                        <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content1">';
                        foreach($modDrop2 as $subName => $subAdress)
                        {
                            echo '<a href="'.$subAdress.'">'.$subName.'</a>';
                        }
                        echo '</div>
                        </div> ';
                    }else
                    {
                        echo '<div class="dropdown1">
                        <button class="dropbtn1 <?php echo $novoMenu; ?>">Modelagem 3D 
                        <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content1">';
                        foreach($modDrop3 as $subName => $subAdress)
                        {
                            echo '<a href="'.$subAdress.'">'.$subName.'</a>';
                        }
                        echo '</div>
                        </div> ';
                    }
                }
                if($page == 'pixel') 
                {
                    echo '<div class="dropdown1">
                    <button class="dropbtn1 <?php echo $novoMenu; ?>">Pixel Art
                    <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content1">';
                    foreach($pixDrop as $subName => $subAdress)
                    {
                    echo ' <a href="'.$subAdress.'">'.$subName.'</a>';
                    }
                    echo '</div>
                    </div> ';
                }
                else
                {
                    if($page == 'home') 
                    {
                        echo '<div class="dropdown1">
                        <button class="dropbtn1 <?php echo $novoMenu; ?>">Pixel Art
                        <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content1">';
                        foreach($pixDrop2 as $subName => $subAdress)
                        {
                            echo '<a href="'.$subAdress.'">'.$subName.'</a>';
                        }
                        echo '</div>
                        </div> ';
                    }else
                    {
                        echo '<div class="dropdown1">
                        <button class="dropbtn1 <?php echo $novoMenu; ?>">Pixel Art 
                        <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content1">';
                        foreach($pixDrop3 as $subName => $subAdress)
                        {
                            echo '<a href="'.$subAdress.'">'.$subName.'</a>';
                        }
                        echo '</div>
                        </div> ';
                    }
                }
                if($page == 'saiba') 
                {
                    echo '<div class="dropdown1">
                    <button class="dropbtn1 <?php echo $novoMenu; ?>">Saiba Mais
                    <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content1">';
                    foreach($saiDrop as $subName => $subAdress)
                    {
                    echo ' <a href="'.$subAdress.'">'.$subName.'</a>';
                    }
                    echo '</div>
                    </div> ';
                }
                else
                {
                    if($page == 'home') 
                    {
                        echo '<div class="dropdown1">
                        <button class="dropbtn1 <?php echo $novoMenu; ?>">Saiba Mais
                        <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content1">';
                        foreach($saiDrop2 as $subName => $subAdress)
                        {
                            echo '<a href="'.$subAdress.'">'.$subName.'</a>';
                        }
                        echo '</div>
                        </div> ';
                    }else
                    {
                        echo '<div class="dropdown1">
                        <button class="dropbtn1 <?php echo $novoMenu; ?>">Saiba Mais
                        <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content1">';
                        foreach($saiDrop3 as $subName => $subAdress)
                        {
                            echo '<a href="'.$subAdress.'">'.$subName.'</a>';
                        }
                        echo '</div>
                        </div> ';
                    }
                }
                ?>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon1" onclick="myFunction()">&#9776;</a>
        </div>
        <script>
        function myFunction() {
            var x = document.getElementById("myTopnav1");
            if (x.className === "topnav1") {
            x.className += " responsive1";
            } else {
            x.className = "topnav1";
            }
        }
        </script>
    </nav>
    <div id="portal" class="row <?=$footer?>">
        <div class=" col-lg-12 " ><p class="h1 text-center fonteh1"><?= $display?></p>
        </div>
    </div>