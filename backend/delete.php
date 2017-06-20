<?php
session_start();

$id = $_GET['id'];

require "connect.php";

$stmt = $dbh->prepare("SELECT * FROM products WHERE id=$id");
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    if ($_SESSION['access'] == 1 || ( $_SESSION['access'] == 2 && $_SESSION['userId'] == $row['authorId'] )) {
        $statement = $dbh->prepare("DELETE FROM products WHERE id=$id");
        $statement->execute();
header("location: ../frontend/index.php");
    }
}

?>