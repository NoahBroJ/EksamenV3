<?php
    /*Declare page variables*/
    $page = "index";
    $title = "Økologiske produkter til pleje af kroppen";
    $description = "Økoshop.DK tilbyder et bredt udvalg af produkter til usammenlignelige priser, alle produceret lokalt. Opret en bruger nu og deltag i fællesskabet.";
    $pageTitle = "Økoshop.dk - Home";
    
    /*Include head and header*/
    require "header.php";
?>

<main>
    <section id="preamble">
        <h2>ØKOshop.DK - økologiske og bæredygtigt fremstillede kvalitetsvarer - nemt og hurtigt</h2>
        
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est nesciunt obcaecati voluptatibus, maxime in. Deleniti esse alias ratione ipsam, dolorum ea, eligendi possimus aperiam repellendus consequuntur, tempora qui, inventore reprehenderit!</p>
    </section>
    
    <section id="product-container">
        <?php require "../backend/fetchLatest.php" ?>
    </section>
</main>

<?php
    /*Include footer*/
    require "footer.php";
?>