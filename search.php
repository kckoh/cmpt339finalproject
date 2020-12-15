<?php
    require_once("includes/header.php");
    // if(!isset($_GET["id"])){
    //     Constants::showError("error: no Id is found. Press back");
    // }

    // $movieId = $_GET["id"];
    // $movie = new Entity($conn,$movieId );
    // $preview = new Preview($conn, $LoggedIn);
    // echo $preview->playVideo($movie);

?>

<div class="textbox">
        <input type="text" class="searchInput" placeholder="Search Movie title">
        <div class="results"></div>
</div>

<script>

$(function() {

    var username = '<?php echo $LoggedIn; ?> ';
    var timer;

    $(".searchInput").keyup(function() {
        
        clearTimeout(timer);
        timer = setTimeout(() => {
            var timeout = $(".searchInput").val();

            if(timeout != "" ){
                $.post("getSearchResult.php", {term: timeout, username: username}, function(data){
                    $(".results").html(data);
                })
            }
            else {
                
            }
        console.log(timeout);
        }, 500);
    })  ;

})


</script>

