<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--Meta tags and SEO-->
    <meta charset="UTF-8">
    <meta title="<?php echo $title ?>">
    <meta name="description" content="<?php echo $description ?>">
    <meta name="keywords" content="Økologi, Hårpleje, Skønhed, Shop">
    <meta name="author" content="Noah Bro-Jørgensen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?></title>
    
    <!--Favicon-->
    <link rel="icon" type="image/png" href="../img/logo2.jpg">
    
    <!--Link style sheets-->
    <link rel="stylesheet" href="../styles/style.css">
    
    <!--Link JQuery, Font Awesome, and script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/d333651ce6.js"></script>
    <script src="../script/script.js"></script>
    
</head>
<body>
    <div id="aside-bar">
        <i class="fa fa-angle-right fa-2x" aria-hidden="true"></i>
    </div>
    <div id="wrapper">
        <div id="content">

            <aside id="left">
                <img src="../img/logo2.jpg" alt="Logo" id="logo">
                <h1>ØKO<span>shop.</span><br><span>DK</span></h1>
                <nav>
                    <a href="index.php"<?php if ($page == "index") {echo "class='active'";} ?>>Forside</a>
                    <a href="shop.php"<?php if ($page == "shop") {echo "class='active'";} ?>>Shop</a>
                    <a href="#"<?php if ($page == "garanti") {echo "class='active'";} ?>>Garanti</a>
                    <a href="#"<?php if ($page == "about") {echo "class='active'";} ?>>Om os</a>
                    <a href="#"<?php if ($page == "contact") {echo "class='active'";} ?>>Kontakt</a>
                    <!--If session is not active, show login and register-->
                    <?php if (!isset($_SESSION['userId'])) {
                        echo "<p id='log-ind'>Log ind</p>";
                        require "login.php";
                        echo "<p id='register'>Registrér</p>";
                        require "register.php";
                    } else {
                        echo "<a href='../backend/logout.php?logout=true'>Log ud</a>";
                    } ?>
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
                        <?php if (isset($_SESSION['userId'])) { ?>
                            <a href="#">Min konto</a>
                            <a href="#"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i> Min kurv</a>
                        <?php } else { ?>
                            <p><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i> Log ind</p>
                        <?php } ?>
                        </div>
                    </nav>

                    <figure id="banner">
                        <img src="../img/banner.jpg" alt="Banner image">
                    </figure>
                </header>