<?php
    if(isset($_POST["submitAccount"])){
        echo "Testing for submit";
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Register Page</title>
        <link rel="stylesheet" type = "text/css" href ="assets/css/style.css">
    </head>
    <body>

        <div class="container"> 
            
            <div class="column">
            <div class="title">
                <h2>Sign Up</h2>
            </div>
                <form method="POST">
                    <input type="text" name="firstName" placeholder="First Name" required> 
                    <input type="text" name="lastName" placeholder="Last Name" required>
                    <input type="text" name="username" placeholder="username" required>  
                    <input type="password" name="firstPassword" placeholder="password" required>
                    <input type="password" name="secondPassword" placeholder="password confirm" required>

                    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                    <input type="submit" name="submitAccount" value="submit">   
                </form>
                <span> Do you have an account?  <a href="login.php"> Login here</a></span>
                
            </div>
        </div>


    </body>
</html>