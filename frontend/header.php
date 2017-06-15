<!DOCTYPE html>
<html lang="en">
<head>
    <!--Meta tags and SEO-->
    <meta charset="UTF-8">
    <meta title="<?php echo $title ?>">
    <meta name="description" content="<?php echo $description ?>">
    <meta name="keywords" content="">
    <meta name="author" content="Noah Bro-Jørgensen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?></title>
    
    <!--Favicon-->
    <link rel="icon" type="image/png" href="../img/logo2.jpg">
    
    <!--Link style sheets-->
    <link rel="stylesheet" href="../styles/master.css">
    <link rel="stylesheet" href="../styles/<?php echo $page ?>.css">
    
    <!--Link JQuery, Font Awesome, and script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/d333651ce6.js"></script>
    <script src="../scripts/<?php echo $page ?>.js"></script>
    
</head>
<body>
    <div id="wrapper">
        <div id="content">

            <aside id="left">
                <img src="../img/logo2.jpg" alt="Logo" id="logo">
                <h1>ØKO<span>shop.</span><br><span>DK</span></h1>
                <nav>
                    <a href="#">Forside</a>
                    <a href="#">Shop</a>
                    <a href="#">Garanti</a>
                    <a href="#">Om os</a>
                    <a href="#">Kontakt</a>
                    <a href="#">Log ind</a>
                    <a href="#">Registrér</a>
                </nav>
            </aside>

            <section id="right">

                <header>
                    <nav id="header-nav">
                        <div id="social-icons">
                            <a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a>
                        </div>
                        <div id="basket">
                            <a href="#">Min konto</a>
                            <a href="#"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i> Min kurv</a>
                        </div>
                    </nav>

                    <figure id="banner">
                        <img src="../img/banner.jpg" alt="Banner image">
                    </figure>
                </header>