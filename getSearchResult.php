<?php

 require_once("includes/config.php");
 require_once("includes/SearchResultProvider.php");
 require_once("includes/MovieProvider.php");
 require_once("includes/Movie.php");
 require_once("includes/Preview.php");

 //if there is the term, send it to searchResult provider and get the results and display it
 if(isset($_POST["term"]) && isset($_POST["username"]) ){
    $searchResults = new SearchResultsProvider($conn,$_POST["term"]);
    echo $searchResults->getResults($_POST["term"]);
 }

 else {
      echo "errors";
 }

?>



