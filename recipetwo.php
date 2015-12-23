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
$title = select("title", "recipe", "recipe_id", "2");
$subtitle = select("subtitle", "recipe", "recipe_id", "2");
$time = select("time", "recipe", "recipe_id", "2");
$servings = select("servings", "recipe", "recipe_id", "2");
$ingredients = select("ingredients", "recipe", "recipe_id", "2");
$preparation = select("preparation", "recipe", "recipe_id", "2");
$story = select("story", "recipe", "recipe_id", "2");


?>

<!DOCTYPE html>
<html>
<head>
    <title>Eat to Travel</title>
    <meta charset="UTF-8">
    <!-- <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> -->
    <link rel="stylesheet" type="text/css" href="css/recipe.css">
</head>
<body>

    <div id="screen"></div>
    <div id="logo"><a href="index.php"><img src="image/logo3.png"></a></div>
    <div id="nav">
        <nav>
            <a href="places.php">Places</a>
            <a href="recipepage.php">Recipes</a>
            <a href="">Tips</a>
        </nav>
    </div>
    <div class="account">
        <p>Hello, <strong><a href="account.php"><?php echo $username;?></a>!</strong></p>  
    </div>
    <div class="login">
        <a href="logout.php"><button>LOGOUT</button></a>
    </div>

    <div class="featured2">
        <img src="image/toast2.jpg">
    </div>

    <div id="recipetitle">
        <h1><?php echo $title;?></h1>
        <p><?php echo $subtitle;?></p>
    </div>
    
    <div class="subfeature2">
        <h2>New York</h2>
    </div>
    
    <div class="back2"></div>

    <img class= "accent2" src="image/story2.png">

    <div id="story">
        <p></p>
    </div>

    <div id="back3"></div>

    <div id="listen">
        <h1>While You Cook</h1>
    </div>

    <div id="play">
        <img src="image/headphones.png">
    </div>

    <div id="watch">
        <img src="image/tv.png">
    </div>

    <!-- <div id="music">
        <a href=""><img src="image/game.png" title="music"></a>
    </div> -->

    <div class="ingredients">
        <h5>INGREDIENTS</h5>
        <ul>
            <li><?php echo $ingredients;?></li>
        </ul>
    </div>

    <div class="serving">
        <p>COOK TIME: <?php echo $time;?> | SERVINGS: <?php echo $servings;?></p>
        <!-- <img src="image/plus.png"> -->
    </div>

    <div class="prepare">
        <h5>PREPARE</h5>
        <p><?php echo $preparation;?></p>
    </div>

    <div id="product">
        <img src="image/toast4.jpg">
    </div>

    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/index.js"></script>

</body>
</html>