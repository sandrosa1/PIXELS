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
            <small>&copy;Desenvolvido por Pixels - 2020</small>
        </div>
        <div class="col-lg-4 col-6" id="logosFooter" >
            <a href="https://www.fatecsaoroque.edu.br/contato.html" target="blank"><img
                    src="<?php if( $page =='home')
                    { 
                        echo 'imagem/logos/footerLogoWhatsapp.png' ;
                    }else
                    { 
                        echo '../imagem/logos/footerLogoWhatsapp.png' ;
                    }

                    ?> " alt="logo do Whatsapp" >
                    </a>
                    <a href="https://www.facebook.com/plugins/error/confirm/page?iframe_referer=https%3A%2F%2Fwww.facebook.com%2Fplugins%2Fclose_popup.php%3Fprev_url%3Dhttps%253A%252F%252Fwww.fatecsaoroque.edu.br%252Findex.html%26reload%3Dhttps%253A%252F%252Fwww.facebook.com%252Fplugins%252Fpage.php%253Fhref%253Dhttps%25253A%25252F%25252Fwww.facebook.com%25252Ffatecsr%2526width%253D%252B470%2526height%253D214%2526small_header%253Dfalse%2526adapt_container_width%253Dtrue%2526hide_cover%253Dfalse%2526show_facepile%253Dtrue%2526ret%253Dsentry%2526new_count%253D1859%2526from_confirm%253D1%2526hash%253DAQBr7H0I7UAr3FP5&kid_directed_site=false&secure=true&plugin=page&return_params=%7B%22href%22%3A%22https%3A%2F%2Fwww.facebook.com%2Ffatecsr%22%2C%22width%22%3A%22%20470%22%2C%22height%22%3A%22214%22%2C%22small_header%22%3A%22false%22%2C%22adapt_container_width%22%3A%22true%22%2C%22hide_cover%22%3A%22false%22%2C%22show_facepile%22%3A%22true%22%2C%22ret%22%3A%22sentry%22%2C%22new_count%22%3A%221859%22%2C%22from_confirm%22%3A%221%22%2C%22act%22%3Anull%7D" target="blank" >
                        <img src="<?php if( $page =='home')
                        {
                            echo 'imagem/logos/footerLogoFacebook.png' ;
                        }else 
                        { 
                            echo '../imagem/logos/footerLogoFacebook.png';
                        }

                        ?> " alt=" logo do facebook "></a>
                        <a href="https://www.instagram.com/fatecsr/?hl=pt-br" target="blank"><img src="<?php if($page =='home')
                        { 
                            echo 'imagem/logos/footerLogoInstagran.png';
                        }else
                        { 
                            echo '../imagem/logos/footerLogoInstagran.png';
                        }

                        ?> " alt="logo do Instagran" ></a>
                        <a href="#inicio" ><img src="<?php if($page =='home')
                        {
                            echo 'imagem/logos/footerLogoSeta.png';
                        }
                        else
                        { 
                            echo '../imagem/logos/footerLogoSeta.png';
                        }
                        ?> " alt=" Volta para o incio da pagina "></a>
        </div>
    </div>
</footer>