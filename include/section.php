<?php

$subHome = '';
$activeSec = '';
$imgAniSec  = '../imagem/animacao/home.webp';
$imgDeseSec  = '../imagem/vetoriais.webp';   
$imgIlusSec  = '../imagem/ilustracao.webp';
$imgModeSec  = '../imagem/modelagem.webp';
$imgPixeSec  = '../imagem/pixelart-principal882x296.png';  
$imgSabQSec = '../imagem/animacao/fatec.webp'; 
$imgSabCSec = '../imagem/carreira.webp';
$imgSabNSec = '../imagem/norma800.png';

if($page == 'home')
{
    $subHome = '';
    $activeSec = 'homeSec';
    $imgAniSec  = 'imagem/animacao/home.webp';
    $imgDeseSec  = 'imagem/vetoriais.webp';   
    $imgIlusSec  = 'imagem/ilustracao.webp';
    $imgModeSec  = 'imagem/modelagem.webp';
    $imgPixeSec  = 'imagem/pixelart-principal882x296.png';  
    $imgSabQSec = 'imagem/animacao/fatec.webp'; 
    $imgSabCSec = 'imagem/carreira.webp';
    $imgSabNSec = 'imagem/norma800.png';
    
}

if($page == 'animacao')
{
    $subAnimacacao = 'animacao.php';
    $activeSec = 'animacaoSec';

}
else
{
    $subAnimacacao = '../animacao/animacao.php';

}
if($page == 'desenho')
{
    $subDesenho = 'desenho.php';
    $activeSec = 'desenhoSec';  
}
else
{
    $subDesenho = '../desenho/desenho.php';
}

if($page == 'ilustracao')
{
    $subIlustracao = 'ilustracao.php';
    $activeSec = 'ilustracaoSec'; 

}else
{
    $subIlustracao = '../ilustracao/ilustracao.php';
}

if($page == 'modelagem')
{
    $subModelagem = 'Modelagem 3d';
    $activeSec = 'modelagemSec'; 
}else
{
    $subModelagem = '../modelagem/Modelagem 3d';
}
if($page == 'pixel')
{
    $subPixel = 'pixel.php';
    $activeSec = 'pixelSec'; 

}else
{
    $subPixel = '../pixel/pixel.php';

}

if($page == 'saiba')
{
    $subSaibaQ = 'quemSomos.php';
    $subSaibaC = 'carreira.php' ;
    $subSaibaN = 'normas.php' ;
    $activeSec  = 'saibaSec'; 
    
}else
{
    $subSaibaQ = '../servicos/quemSomos.php';
    $subSaibaC = '../servicos/carreira.php' ;
    $subSaibaN = '../servicos/normas.php' ;
}
?>
<div class="animacaoGaleria">
    <h3 class=" text-center <?php echo $activeSec ;?> ">Veja também</h3>
    <div class=" row imagensGaleria">
        <div class=" col-lg-3 galeria ">
            <!--Animação-->
            <a href="<?php echo $subAnimacacao ; ?>" style="text-decoration:none;color:black;"><img src=" <?php echo $imgAniSec  ; ?>  "
                    alt="Logo do Portal Animação Digital" style="width:90%">
                <h5 class="card-title  <?php echo $activeSec ;?> ">Por trás da Animação digital</h5>
                <p class="card-text">Conheça a historia da Animação suas Tecnicas e profissionais de destaques
                    <b>Saiba Mais...</b>
                </p>
            </a>
            <!--Quem somos-->
            <a href=" <?php echo $subSaibaQ ; ?> " style="text-decoration:none;color:black;"><img src=" <?php echo $imgSabQSec  ; ?> "
                    alt="Pintura da fachada da fatec São Roque " style="width:90%">
                <h5 class="card-title <?php echo $activeSec ;?> ">PORTAL PIXELS</h5>
                    <p class="text-left">Grupo de desenvolvedores da fatec São Roque Criam o PORTAL PIXELS <b>Saiba Mais
                            sobre essa equipe...</b></p>
            </a>
        </div>
        <!--Desenho Vetorial-->
        <div class=" col-lg-3 galeria ">
            <a href=" <?php echo $subDesenho ; ?> " style="text-decoration:none;color:black;"><img src=" <?php echo $imgDeseSec  ; ?> "
                    alt="Logo da Pagina Desenho Vetorial" style="width:90%">
                <h5 class="card-title <?php echo $activeSec ;?> ">Desenho Vetorial</h5>
                <p class="text-left">Coloque Seu Texto e Anexe a endereço da sua imagem no includer section.php <b>Saiba Mais...</b></p>
            </a>
            <!--Normas-->
            <a href=" <?php echo $subSaibaN ; ?> " style="text-decoration:none;color:black;"><img src=" <?php echo $imgSabNSec  ; ?> "
                    alt="Foto da pagina de normas " style="width:90%">
                    <h5 class="card-title  <?php echo $activeSec ;?> ">Normas de utilização</h5>
                <p class="text-left">Atenção leia nossas normas de utilização para maior segurança <b>Saiba Mais...</b>
                </p>
            </div>
            <div class=" col-lg-3 galeria ">
            <!--Desenho Vetorial-->
            <a href=" <?php echo $subPixel ; ?> " style="text-decoration:none;color:black;"><img src=" <?php echo $imgPixeSec  ; ?>"
                    alt="Logo tipo doa pagina pixel art" style="width:90%">
                <h5 class="card-title  <?php echo $activeSec ;?> ">A arte do ponto a ponto</h5>
                <p class="text-left">Veja também o portal Pixel Art e apreenda sobre a arte do ponto a ponto <b>Saiba Mais...</b></p>
                        </a>
                        <a href=" <?php echo $subSaibaC ; ?> " style="text-decoration:none;color:black;"><img src=" <?php echo $imgSabCSec  ; ?>"
                    alt="Imagem peguntando o que você que faze, sobre profissão" style="width:90%">
                <h5 class="card-title <?php echo $activeSec ;?> ">Junte-se a nós</h5>
                <p class="text-left">venha fazer parte dessa equipe, e juntos vamos aumentar ainda mais o nosso alcance <b>Cadastre - se</b></p></a>
        </div>
        <div class=" col-lg-3 galeria ">
            <a href=" <?php echo $subIlustracao ; ?> " style=" text-decoration:none;color:black; "><img src=" <?php echo $imgIlusSec ; ?> "
            alt="Logo do portal ilustraçao digital" style="width:90%">
            <h5 class="card-title <?php echo $activeSec ;?> ">Ilustração Digital</h5>
            <p class=" text-left">Coloque Seu Texto e Anexe a endereço da sua imagem no includer section.php <b>Saiba
                    mais...</b></p>
            <a href=" <?php echo $subModelagem ; ?> " style="text-decoration:none;color:black;"><img src=" <?php echo $imgModeSec ; ?> "
                    alt="Logo da pagina modelagme 3d" style="width:90%">
                <h5 class="card-title  <?php echo $activeSec ;?> ">Modelagem 3D</h5>
                <p class=" text-left">Coloque Seu Texto e Anexe a endereço da sua imagem no includer section.php <b>Saiba
                    Mais...</b></p>
            </a>
        </div>
    </div>
</div>