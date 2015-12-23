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

$location = select("location", "user", "username", $_SESSION['username']);

$city = select("city", "user", "username", $_SESSION['username']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Eat to Travel</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/account.css">
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

    <h3 id="recipes">RECIPE BOX</h3>

    <a id="browse" href="">Browse More</a>

    <div class="saved">
        <ul>
            <li><img src="image/soba.jpg"></li>
            <li><img src="image/Brazil.jpg" title="BRAZIL"></li>
            <li><img src="image/India.jpg" title="INDIA"></li>
            <li><img src="image/Italy.jpg" title="ITALY"></li>
            <li><img src="image/Spain2.jpg" title="SPAIN"></li>
            <li><img src="image/Parigi.jpg" title="FRANCE"></li>
            <li><img src="image/Phillipines.jpg" title="PHILLIPINES"></li>
            <li><img src="image/Thailand1.jpg" title="THAILAND"></li>
        </ul>
    </div>

  <!--   <?php
        for ($index = 0; $index < $amount_of_links; $index++) {
        echo "<dd><a href=\"uploads/$links[$index]\">$links[$index]</a></dd>\n";
        }
    ?>

    <section id="upload">
        <form method="post" action="upload.php" enctype="multipart/form-data">
            <p><input type="file" name="document"></p>
            <p><input type="submit" id="send_file" value="Send File"></p>
        </form>
    </section> -->
            
    <div id="instagram">
        <h1>EXPLORE YOUR LOCATION</h1>
    </div>

    <div id="instafeed"></div>

    <script type="text/javascript" src="./js/instafeed.min.js"></script>

    <script type="text/javascript">
        var feed = new Instafeed({
            get: 'tagged',
            tagName: 'nycfood',
            limit: '8',
            clientId: 'bc2fe5119dc94167b4b3fb33ee7fbe55'
        });
        feed.run();
    </script>"
    

</body>
</html>