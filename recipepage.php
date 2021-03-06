<?php

session_start();

if (isset($_SESSION['valid'])) {
    if ($_SESSION['valid'] !== true) {
        header("Location: ./index.php");
    }
} else {
    header("Location: ./index.php");
}

require_once "includes/db.php";
require_once "includes/main.php";

$username = select("username", "user", "username", $_SESSION['username']);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Eat to Travel</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/recipepage.css">
</head>
<body>

    <div id="screen"></div>
    <div id="logo"><a href="index.php"><img src="image/logo3.png"></a></div>

    <div id="nav">
        <nav>
            <a href="places.php">Places</a>
            <a href="recipepage.php">Recipes</a>
        </nav>
    </div>
    <div class="account">
        <p>Hello, <strong><a href="account.php"><?php echo $username;?></a>!</strong></p>  
    </div>
    <div class="login">
        <a href="logout.php"><button>LOGOUT</button></a>
    </div>

     <div class="featured">
        <a href="recipe.php"><img src="image/toast.jpg"></a>
    </div>

    <div class="subfeature">
         <a href="recipe.php"><h2>Avocado Toast with Goat Cheese</h2></a>
    </div>

    <a href="recipe.php"><div class="back"></div></a>

    <img class= "accent" src="image/featured.png">

    <img class="arrow" src="image/arrow3.png">

    <div class="navigation3">
        <ul>
            <li><a href="recipetwo.php"><img src="image/tikka4.png"></a></li>
            <li><img src="image/"></li>
            <li><img src="image/"></li>
            <li><img src="image/"></li>
        </ul>
    </div>

    <div class="navigation3">
        <ul>
            <li><a href="recipetwo.php"><img src="image/tikka.jpg"></a></li>
            <li><img src="image/taco.jpg"></li>
            <li><img src="image/stew.jpg"></li>
            <li><img src="image/grits.jpg"></li>
        </ul>
    </div>
    
    <script src="js/jquery-2.1.4.min.js"></script>

</body>
</html>