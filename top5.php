<?php
    //shows all the top five movies order by asc
    require_once("includes/header.php");

    $preview = new Preview($conn, $LoggedIn);
    echo $preview->createVideo(null);

    $categories = new Category($conn, $LoggedIn);
    echo $categories->showTop5Movies();
?>

