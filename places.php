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
    <link rel="stylesheet" type="text/css" href="css/places.css">
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
    
    <div class="featured">
        <a href=""><img src="image/nyc2.jpg"></a>
    </div>

    <div class="subfeature">
        <h2>New York City Food Scene</h2>
    </div>
    
    <div class="back"></div>

    <img class= "accent" src="image/featured.png">

    <img class="arrow" src="image/arrow.png">

      <div class="navigation">
        <ul>
            <li><img src="image/brazil.png"></li>
            <li><img src="image/india.png"></li>
            <li><img src="image/italy.png"></li>
            <li><img src="image/us.png"></li>
            <li><img src="image/spain.png"></li>
            <li><img src="image/france.png"></li>
            <li><img src="image/pi.png"></li>
            <li><img src="image/thailand.png"></li>
        </ul>
    </div>

    <div class="navigation">
        <ul>
            <li><img src="image/Brazil.jpg"></li>
            <li><img src="image/India.jpg"></li>
            <li><img src="image/Italy.jpg"></li>
            <li><img src="image/sf.jpg"></li>
            <li><img src="image/Spain2.jpg"></li>
            <li><img src="image/Parigi.jpg"></li>
            <li><img src="image/Phillipines.jpg"></li>
            <li><img src="image/Thailand1.jpg"></li>
        </ul>
    </div>


    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/index.js"></script>

</body>
</html>