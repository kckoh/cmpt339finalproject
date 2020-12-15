<?php
//add the description rating here

    require_once("includes/Constants.php");
    require_once("includes/header.php");
    if(!isset($_GET["id"])){
        Constants::showError("error: no Id is found. Press back");
    }

    $movieId = $_GET["id"];
    $movie = new Movie($conn,$movieId );
    $preview = new Preview($conn, $LoggedIn);
    echo $preview->playVideo($movie);

    // $categories = new Category($conn, $LoggedIn);
    // echo $categories->showAllCategories();
?>
