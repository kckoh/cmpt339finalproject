<?php
    if(isset($_POST["submitAccount"])){
        echo "Testing for submit";
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" type = "text/css" href ="assets/css/style.css">
    </head>
    <body>

        <div class="container"> 
            
            <div class="column">
            <div class="title">
                <h2>Login</h2>
            </div>
                <form method="POST">
                 
                    <input type="text" name="username" placeholder="username" required>  
                    <input type="password" name="firstPassword" placeholder="password" required>

                    <input type="submit" name="submitAccount" value="submit">   
                </form>
                <span> You don't have an account?  <a href="register.php"> SignUp here</a></span>
                
            </div>
        </div>


    </body>
</html>