<?php
/*Get form values*/
$username = $_POST['username'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

/*Check if password and repassword match*/
if ($password != $repassword) {
    header("Location: ../frontend/index.php?e=rp", true, 303);
} else {
    require "connect.php";
    
    /*Find duplicate names in database*/
    $stmt = $dbh->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bindParam(1, $username);
    $stmt->execute();
    
    /*If duplicate, return with error*/
    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        header("Location: ../frontend/index.php?e=rn", true, 303);
    } else {
        /*Insert into database*/
        $statement = $dbh->prepare("INSERT INTO users(username, password) VALUES(?, ?)");
        $statement->bindParam(1, $username);
        $statement->bindParam(2, $password);
        $statement->execute();
        
        require "session.php";

        header("Location: ../frontend/index.php", true, 303);
    }
}

/*Close connection*/
$dbh = null;
?>