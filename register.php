<?php
require_once("includes/config.php");
require_once("includes/classes/FormSanitizer.php");
    if(isset($_POST["submitButton"])){
        $firstName=FormSanitizer::sanitizeFormString($_POST["firstName"]);
        $lastName=FormSanitizer::sanitizeFormString($_POST["lastName"]);
        $username=FormSanitizer::sanitizeFormUsername($_POST["username"]);
        $email=FormSanitizer::sanitizeFormEmail($_POST["email"]);
        $email2=FormSanitizer::sanitizeFormEmail($_POST["email2"]);
        $password=FormSanitizer::sanitizeFormPassword($_POST["password"]);
        $password2=FormSanitizer::sanitizeFormPassword($_POST["password2"]);
    
        
    }

    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to Netflix</title>
        <link rel="stylesheet" type="text/css" href="assets/style/style.css">
    </head>
    <body>
         <div class="signInContainer">
            <div class="column"> 
                <div class="header">
                <img src="assets/images/logo.png" title="logo" alt="site logo">
                    <h3>Sign Up</h3>    
                    <span>to binge Netflix</span>   
                    
                </div>
                <form method="POST">
                    <input type="text" name="firstName" placeholder="First Name" required>
                    <input type="text" name="lastName" placeholder="Last Name" required>
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="email" name="email2" placeholder="Confirm email" required>
                    <input type="password" name="password" placeholder="password" required>
                    <input type="password" name="password" placeholder="Confirm password" required >
                    <input type="submit" name="submitButton" value="SUBMIT">
                </form>  
                <a href="login.php" class="signInMessage">Already have an account? Sign in here!</a>
            </div>
         </div>     
    </body>
</html>