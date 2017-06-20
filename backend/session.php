<?php
$username = $_POST['username'];
$password = $_POST['password'];

require "connect.php";

$statement = $dbh->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
$statement->bindParam(1, $username);
$statement->bindParam(2, $password);
$statement->execute();

if($row = $statement->fetch()) {
    /*Login lykkedes*/
    session_start();
    $_SESSION['userId'] = $row['userId'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['access'] = $row['access'];
    
    header("location: ../frontend/index.php");
} else {
    /*Brugeren har indtastet forkerte oplysninger*/
    header("location: ../frontend/index.php?e=l");
}

/*Close connection*/
$dbh = null;
?>