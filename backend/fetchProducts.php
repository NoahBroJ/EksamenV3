<?php
/*Establish connection*/
require "connect.php";

/*Set locale for timestamps*/
setlocale(LC_ALL, "danish");

/*Select everything from the products table*/
$statement = $dbh->prepare("SELECT * FROM products ORDER BY id DESC");
$statement->execute();

/*Loop through all articles*/
while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    
    /*Insert into HTML*/
?>
    <article class="product">
        
        <?php
        /*If user has access level 1 or has access level 2 and is the author, display delete button*/
        if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
            
            if ($_SESSION['access'] == 1 || ( $_SESSION['access'] == 2 && $_SESSION['userId'] == $row['authorId'] )) { ?>
                
                <a class="delete-button" href="../backend/delete.php?id=<?php echo $row['id'] ?>"><i class="fa fa-times fa-2x" aria-hidden="true"></i></a>
                
        <?php } } ?>
        
        <img src="../img/<?php echo $row["img"] ?>" alt="Produkt <?php echo $row["id"] ?> - <?php echo $row["name"] ?>">
        <h4><?php echo $row["name"] ?></h4>
        <hr>
        <p class="description"><?php echo $row["description"] ?></p>
        <p class="price"><?php echo $row["price"] ?> kr.</p>
        <div class="publish-details">
            <p class="authorname"><?php require "fetchName.php" ?></p>
            <p class="publish"><?php echo strftime("%d. %B %Y", $row['publish']) ?></p>
        </div>
        <button>Køb</button>
    </article>
<?php
}

/*Close connection*/
$dbh = null;
?>