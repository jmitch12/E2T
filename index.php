<?php

session_start();

require "includes/main.php";
require "includes/config.php";

if (isset($_SESSION["valid"])) {
    if (1 == $_SESSION["valid"]) {
        header("Location: home.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Eat to Travel</title>
    <meta charset="UTF-8">
    <!-- <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> -->
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body background="image/croisant2.jpg">

    <div id="screen"></div>
    <div id="logo"><a href="index.php"><img src="image/logo3.png"></a></div>

    <div id="nav">
        <nav>
            <a href="./login.php?action=login">Places</a>
            <a href="./login.php?action=login">Recipes</a>
            <a href="./login.php?action=login">Tips</a>
        </nav>
    </div>
    <div class="user">
        <a href="register.php">SIGN UP</a>
    </div>
    <div class="login">
        <a href="./login.php?action=login"><button>LOGIN</button></a>
    </div>
    <!-- <a href=""><div id="article"></div></a> -->
    <h1>petit déjeuner</h1>
    <p>The city of lights and its delicious pastries</p>
    <div class="explore">
        <a href=""><button>EXPLORE</button></a>
    </div>
    
    <script src="js/jquery-2.1.4.min.js"></script>


</body>
</html>