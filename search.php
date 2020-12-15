<?php
    require_once("includes/header.php");
?>

<div class="textbox">
        <input type="text" class="searchInput" placeholder="Search Movie title">
        <div class="results"></div>
</div>

<script>

$(function() {

    
    var username = '<?php echo $LoggedIn; ?> ';
    var timer;

    //jquery if anything is typed, it searches the title
    $(".searchInput").keyup(function() {
        
        clearTimeout(timer);
        timer = setTimeout(() => {
            var timeout = $(".searchInput").val();

            //direct to getSearchResult
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

