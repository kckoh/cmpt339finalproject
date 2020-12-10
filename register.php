<?php
require_once("includes/TrimString.php");
require_once("includes/config.php");
require_once("includes/Constants.php");
require_once("includes/Account.php");


    $account = new Account($conn);
    
    if(isset($_POST["submitAccount"])){
        $firstName = TrimString::trimLowerName($_POST["firstName"]);
        $lastName = TrimString::trimLowerName($_POST["lastName"]);
        $username = TrimString::trimLowerUsername($_POST["username"]);
        $password1 = TrimString::trimLowerPassword($_POST["firstPassword"]);
        $password2 = TrimString::trimLowerPassword($_POST["secondPassword"]);
        
        echo strlen($firstName);
        $signUpSuccessful =  $account->register($firstName, $lastName, $username, $password1, $password2);
        if( $signUpSuccessful){
            $_SESSION["LoggedIn"] = $username;
            header("Location: index.php");
        }
    
    }

?>


<!DOCTYPE html>
<html>
    <head>
        <title>SignUp Page</title>
        <link rel="stylesheet" type = "text/css" href ="assets/css/style.css">
    </head>
    <body>

        <div class="container"> 
            
            <div class="column">
            <div class="title">
                <h2>Sign Up</h2>
            </div>
                <form method="POST">
                    <?php echo $account->checkError(Constants::$firstNameErrors); ?>
                    <input type="text" name="firstName" placeholder="First Name" required> 
                    <?php echo $account->checkError(Constants::$lastNameErrors); ?>
                    <input type="text" name="lastName" placeholder="Last Name" required>
                    <?php echo $account->checkError(Constants::$usernameErrors); ?>
                    <?php echo $account->checkError(Constants::$usernameAlreadyExist); ?>
                    <input type="text" name="username" placeholder="username" required>  
                    <?php echo $account->checkError(Constants::$passwordNotMatched); ?>
                    <?php echo $account->checkError(Constants::$passwordErrors); ?>
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