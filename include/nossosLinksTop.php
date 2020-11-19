<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Required meta tags FACE OPEN GRAPH -->
    <meta property="og:url" content="http://pixels.sytes.net/index.php">
    <meta property="og:title" content="O portal para quem se liga em artes digitais">
    <meta property="og:site_name" content="PIXELS">
    <meta property="og:image" content="www.pixels.sytes.net/imagem/logos/logo500.png">
    <meta property="og:image:type" content="imagem/logos/logo500.png">
    <meta property="og:image:width" content="500">
    <meta property="og:image:height" content="500">
    <meta property="og:type" content="website">
    <!-- Required meta tags Twitter -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@portalpixel" />
    <meta name="twitter:title" content="Pixel" />
    <meta name="twitter:description" content="Saiba tudo sobre pixel art e suas técnicas." />
    <meta name="twitter:image" content="www.pixels.sytes.net/imagem/logos/logo500.png" />


    <!-- Bootstrap CSS -->
    <!--Esse css e para as demais paginas-->
    <link href="../css/bootstrap.min.css" rel="stylesheet" >
    <link href="../css/stylus.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400;700&family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
    <!--Esse css e para a pagina index-->
    <link rel="shortcut icon" <?php if($page == 'home')
    {
        echo' href="imagem/favicon.ico"';
    }
    if ($page != 'home')
    {
        echo' href="../imagem/favicon.ico"';
    }
    ?> />
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link href="css/stylus.css" rel="stylesheet">
    <title>Pixels</title>
</head>