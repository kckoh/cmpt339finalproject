<?php
require_once("includes/TrimString.php");
require_once("includes/config.php");
require_once("includes/Constants.php");
require_once("includes/Account.php");

//simple login page that checks if the login information is under the databse
//all the logic is under Account php.
    $account = new Account($conn);

    if(isset($_POST["submitAccount"])){
 
        $username = TrimString::trimLowerUsername($_POST["username"]);
        $password1 = TrimString::trimLowerPassword($_POST["firstPassword"]);

        $signUpSuccessful =  $account->login($username, $password1);

        //if it is logged in, go to index.php
        if( $signUpSuccessful){
            $_SESSION["LoggedIn"] = $username;
            header("Location: index.php");
        }
            
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
                <?php echo $account->checkError(Constants::$accountDoNotExist); ?>
                    <input type="text" name="username" placeholder="username" required>  
                    <input type="password" name="firstPassword" placeholder="password" required>

                    <input type="submit" name="submitAccount" value="submit">   
                </form>
                <span> You don't have an account?  <a href="register.php"> SignUp here</a></span>
                
            </div>
        </div>


    </body>
</html>