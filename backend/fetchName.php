<?php

/*Select everything from the products table*/
$stmt = $dbh->prepare("SELECT * FROM users WHERE userId = ?");
$stmt->bindParam(1, $row["authorId"]);
$stmt->execute();

if ($author = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $author['username'];
} else {
    echo "No author";
}