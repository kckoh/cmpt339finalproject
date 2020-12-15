<?php
  //most of the php files derive from this header 
    require_once("includes/config.php");
    require_once("includes/Preview.php");
    require_once("includes/Movie.php");
    require_once("includes/News.php");
    require_once("includes/Category.php");
    require_once("includes/Constants.php");
    require_once("includes/RandomMovieProvider.php");
    

    if( !isset($_SESSION["LoggedIn"])){
        header("Location: login.php");
    }

    $LoggedIn =  $_SESSION["LoggedIn"];
?>


<!DOCTYPE html>
<html>
    <head>
        <title>CMPT339 FINAL</title>
        <link rel="stylesheet" type = "text/css" href ="assets/css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/abb8513451.js" crossorigin="anonymous"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

                <!-- jQuery library -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

                <!-- Popper JS -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

                <!-- Latest compiled JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                
                <script src="assets/js/jsScripts.js"></script>
    </head>
    <body>
        <!-- add no margin in the nav -->
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php">CMPT339</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="top5.php">TOP 5 MOVIES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="search.php">SEARCH</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php"> <i class="fas fa-sign-out-alt"></i> </a>
      </li>
    </ul>
  </div>
</nav>
<div class="wrapper">

    
