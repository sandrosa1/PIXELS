<?php
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
<footer>
    <div class="row <?= $footer ?> ">
        <div class=" col-lg-4 col-0" >
        </div>
        <div class="col-lg-4 col-6" >
            <p>&copy;Desenvolvido por Pixels</p>
        </div>
        <div class="col-lg-4 col-6" id="logosFooter" >
            <a href="#"><img
                    src="<?php if( $page =='home')
                    { 
                        echo 'imagem/footerLogoWhatsapp.png' ;
                    }else
                    { 
                        echo '../imagem/footerLogoWhatsapp.png' ;
                    }

                    ?> " alt="logo do Whatsapp" >
                    </a>
                    <a href="#">
                        <img src="<?php if( $page =='home')
                        {
                            echo 'imagem/footerLogoFacebook.png' ;
                        }else 
                        { 
                            echo '../imagem/footerLogoFacebook.png';
                        }

                        ?> " alt=" logo do facebook "></a>
                        <a href="#"><img src="<?php if($page =='home')
                        { 
                            echo 'imagem/footerLogoInstagran.png';
                        }else
                        { 
                            echo '../imagem/footerLogoInstagran.png';
                        }

                        ?>"alt="logo do Instagran" ></a>
                        <a href="#inicio"><img src="<?php if($page =='home')
                        {
                            echo 'imagem/footerLogoSeta.png';
                        }
                        else
                        { 
                            echo '../imagem/footerLogoSeta.png';
                        }
                        ?> " alt=" Volta para o incio da pagina "></a>
        </div>
    </div>
</footer>