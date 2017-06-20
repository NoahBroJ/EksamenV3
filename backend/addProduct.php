<?php
/*Upload file*/
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["img"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is an "actual image" or fake image
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


if ($uploadOk == 1) {
    
    /*Get session details*/
    session_start();

    /*Get form values*/
    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $publish = time();
    $authorId = $_SESSION['userId'];

    require "connect.php";

    $statement = $dbh->prepare("INSERT INTO products(name, price, category, img, description, publish, authorId) VALUES(?, ?, ?, ?, ?, ?, ?)");
    $statement->bindParam(1, $name);
    $statement->bindParam(2, $price);
    $statement->bindParam(3, $category);
    $statement->bindParam(4, $target_file);
    $statement->bindParam(5, $description);
    $statement->bindParam(6, $publish);
    $statement->bindParam(7, $authorId);
    $statement->execute();
    
}

header("Location: ../frontend/shop.php", true, 303);
/*Close connection*/
$dbh = null;
?>