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
    <div class="row <?= $footer?>">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
            <p>&copy;Desenvolvido por Pixels</p>
        </div>
        <div class="col-lg-4" id="logosFooter">
            <a href="#"><img
                    src="<? if($page =='home'){echo'imagem/footerLogoWhatsapp.png';}else{echo '../imagem/footerLogoWhatsapp.png';} ?>"
                    alt="logo do Whatsapp" width="30px"></a>
            <a href="#"><img
                    src="<? if($page =='home'){echo 'imagem/footerLogoFacebook.png';}else{echo '../imagem/footerLogoFacebook.png';}?>"" alt="
                    logo do facebook" width="30px"></a>
            <a href="#"><img
                    src="<? if($page =='home'){echo 'imagem/footerLogoInstagran.png';}else{echo '../imagem/footerLogoInstagran.png';}?>"
                    alt="logo do Instagran" width="30px"></a>
            <a href="#inicio"><img
                    src="<? if($page =='home'){echo 'imagem/footerLogoSeta.png';}else{echo '../imagem/footerLogoSeta.png';}?>"
                    alt="Volta para o incio da pagina" width="30px"></a>
        </div>
    </div>
</footer>