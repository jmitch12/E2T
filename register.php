<?php

require_once "includes/main.php";

if (isset($_POST["submitted"])) {
    
    if (1 == $_POST["submitted"]) {
        
            if (0 < strlen($_POST['username']) && 0 < strlen($_POST['password']) && 0 < strlen($_POST['location'])) {
            
                $username = htmlentities(
                    trim($_POST['username']), ENT_QUOTES | 'ENT_HTML5', "UTF-8"
                );

                $password = trim($_POST['password']);

                $location = trim($_POST['location']);

                if (!doesUserExist($username)) {

                    registerNewUser($username, $password, $location);

                    include_once "includes/register_success.inc";

                    header("Refresh: 5; ./login.php?action=login");  
                } else {
                    header("Location: error.php?message_type=registration_error");
                }
          }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Eat to Travel</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/register.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body background="image/croisant.jpg" width="100%"> 

  <div id="head">
    <p><a href="index.php"><img src="image/logo.png"></a></p>
  </div>

  <div class="login">
    <form method="post">
          <p><input type="text"
                   class="login"
                   name="username"
                   placeholder="username"
                   required
                   autofocus></p>
          <p><input type="password"
                   class="login"
                   name="password"
                   placeholder="password" required></p>
          <p><input type="text" 
                   name="city"
                   placeholder="city"></p>
          <p><input type="text" 
                   name="location"
                   placeholder="country"></p>

          <p><input type="hidden" name="submitted" value="1"></p>
          <p><input class="button" type="submit" value="Register"></p>
      </form>
    </div>

    <div class="register">
      <h6>Already a Member?</h6>
      <a href="./login.php?action=login">Sign In</a>
    </div>

  
</body>
</html>