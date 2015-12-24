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
$title = select("title", "recipe", "recipe_id", "1");
$subtitle = select("subtitle", "recipe", "recipe_id", "1");
$time = select("time", "recipe", "recipe_id", "1");
$servings = select("servings", "recipe", "recipe_id", "1");
$ingredients = select("ingredients", "recipe", "recipe_id", "1");
$preparation = select("preparation", "recipe", "recipe_id", "1");
$story = select("story", "recipe", "recipe_id", "1");
$city = select("city", "recipe", "recipe_id", "1");
$song_link = select("song_link", "recipe", "recipe_id", "1");
$video_link = select("video_link", "recipe", "recipe_id", "1");
$article_link = select("article_link", "recipe", "recipe_id", "1");
$image_link = select("image_link", "recipe", "recipe_id", "1");
$insta_link = select("insta_link", "recipe", "recipe_id", "1");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Eat to Travel</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/recipe.css">
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

    <div class="featured2">
        <img src="image/toast2.jpg">
    </div>

    <div id="recipetitle">
        <h1><?php echo $title;?></h1>
        <p><?php echo $subtitle;?></p>
    </div>
    
    <div class="subfeature2">
        <h2><?php echo $city;?></h2>
    </div>
    
    <div class="back2"></div>

    <img class= "accent2" src="image/story2.png">

    <div id="story">
        <p><?php echo $story;?></p>
    </div>

    <div id="back3"></div>

    <div id="listen">
        <h1>While You Cook</h1>
    </div>

    <div id="play">
        <a href="<?php echo $song_link;?>" target="_blank"><img src="image/headphones.png"></a>
    </div>

    <div id="watch">
        <a href="<?php echo $video_link;?>" target="_blank"><img src="image/tv.png"></a>
    </div>

    <div id="insta">
        <a href="<?php echo $insta_link;?>" target="_blank"><img src="image/instagram.png" title="music"></a>
    </div>

     <div id="read">
        <a href="<?php echo $article_link;?>" target="_blank"><img src="image/read.png" title="music"></a>
    </div>

    <div id="gif">
        <a href="<?php echo $image_link;?>" target="_blank"><img src="image/gif.png" title="music"></a>
    </div>

    <div class="ingredients">
        <h5>INGREDIENTS</h5>
        <ul>
            <li><?php echo $ingredients;?></li>
        </ul>
    </div>

    <div class="serving">
        <p>COOK TIME: <?php echo $time;?> | SERVINGS: <?php echo $servings;?></p>
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