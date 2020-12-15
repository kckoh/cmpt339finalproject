<?php
    //include header which has all the scripts and navbars
    require_once("includes/header.php");

    //the preview video
    $preview = new Preview($conn, $LoggedIn);
    echo $preview->createVideo(null);

    //shows news
    $news = new Category($conn, $LoggedIn);
    echo $news->showAllNews();

    // shows other categories
    $categories = new Category($conn, $LoggedIn);
    echo $categories->showAllCategories();
?>


