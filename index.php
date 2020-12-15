<?php

    require_once("includes/header.php");

    $preview = new Preview($conn, $LoggedIn);
    echo $preview->createVideo(null);

    $news = new Category($conn, $LoggedIn);
    echo $news->showAllNews();

    $categories = new Category($conn, $LoggedIn);
    echo $categories->showAllCategories();
?>


