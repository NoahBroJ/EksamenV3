<?php
/*Get session details*/
session_start();

/*Get form values*/
$name = $_POST['name'];
$price = $_POST['price'];
$category = $_POST['category'];
$img = $_POST['img'];
$description = $_POST['description'];
$publish = time();
$authorId = $_SESSION['userId'];

require "connect.php";

$statement = $dbh->prepare("INSERT INTO products(name, price, category, img, description, publish, authorId) VALUES(?, ?, ?, ?, ?, ?, ?)");
$statement->bindParam(1, $name);
$statement->bindParam(2, $price);
$statement->bindParam(3, $category);
$statement->bindParam(4, $img);
$statement->bindParam(5, $description);
$statement->bindParam(6, $publish);
$statement->bindParam(7, $authorId);
$statement->execute();

header("Location: ../frontend/shop.php", true, 303);
?>