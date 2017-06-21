<?php
    /*Declare page variables*/
    $page = "shop";
    $title = "Shop her for økologiske plejeprodukter eller sælg dine egne!";
    $description = "Økoshop.DK's shop er for alle og enhver. Økologi kender ingen grænser, og vi tilbyder produkter fra alle egne af landet, produceret lokalt hos vores egne brugere.";
    $pageTitle = "Økoshop.DK - Shop";
    
    /*Include head and header*/
    require "header.php";
    
    /*Get search tags*/
    if (!empty($_GET["search"])) {
        $searchTag = trim($_GET["search"]);
    }
?>

<main>
    <section id="preamble">
        <h2>ØKOshop.DK - økologiske og bæredygtigt fremstillede kvalitetsvarer - nemt og hurtigt</h2>
        
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est nesciunt obcaecati voluptatibus, maxime in. Deleniti esse alias ratione ipsam, dolorum ea, eligendi possimus aperiam repellendus consequuntur, tempora qui, inventore reprehenderit!</p>
    </section>
    <?php if (isset($_SESSION['userId'])) { ?>
    <section id="upload">
        <h3 id="product-upload">Tilføj Produkt</h3>
        <hr>
        <?php require "upload.php" ?>
        <hr>
    </section>
    <?php } ?>
    
    <form id="search-form" action="shop.php">
        <div id="search-container">
            <input id="search" type="text" name="search">
            <button id="search-submit" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
    </form>
    
    <section id="product-container">
        <?php require "../backend/fetchProducts.php" ?>
    </section>
</main>

<?php
    /*Include footer*/
    require "footer.php";
?>