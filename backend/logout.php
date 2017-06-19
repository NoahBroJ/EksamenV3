<?php
    session_start();
    
    /*Check if user pressed logout button */
    if(isset($_GET['logout'])) {
        if($_GET['logout']) {
            session_destroy();
            header("location: ../frontend/index.php");
        } else {
            echo "Fejl";
        }
    }
?>