<?php
    if(isset($_POST["submitButton"])){
        $firstName=sanitizeFormString($_POST["firstName"]);
        echo $firstName;
        
    }

    function sanitizeFormString($inputText){
        $inputText=strip_tags($inputText);
        //$inputText=str_replace(" ","",$inputText);
        $inputText=trim($inputText);
        $inputText=strtolower($inputText);
        $inputText=ucfirst($inputText);
        return $inputText;
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
                    <input type="text" name="lasttName" placeholder="Last Name" required>
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