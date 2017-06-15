<?php
    /*Declare page variables*/
    $page = "index";
    $title = "";
    $description = "";
    $pageTitle = "";
    
    /*Include head and header*/
    require "header.php";
?>

<main>
    <section id="preamble">
        <h2>ØKOshop.DK - økologiske og bæredygtigt fremstillede kvalitetsvarer - nemt og hurtigt</h2>
        
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est nesciunt obcaecati voluptatibus, maxime in. Deleniti esse alias ratione ipsam, dolorum ea, eligendi possimus aperiam repellendus consequuntur, tempora qui, inventore reprehenderit!</p>
    </section>
    
    <section id="product-container">
        <article class="product">
            <img src="../img/1.jpg" alt="">
            <h3>Produkt navn</h3>
            <hr>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, ratione. Sapiente nostrum maiores quos hic alias, fugiat laborum ratione reiciendis voluptates quis assumenda modi dicta recusandae illo numquam nihil qui.</p>
            <p class="price">230 kr.</p>
            <p class="publish">13-06-2017</p>
            <button>Køb</button>
        </article>
    </section>
</main>

<?php
    /*Include footer*/
    require "footer.php";
?>