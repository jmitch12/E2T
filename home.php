<?
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
    <script src="https://use.typekit.net/wns6gub.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <!-- <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> -->
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body background="image/croisant2.jpg">

    <div id="screen"></div>
    <div id="logo"><a href="index.php"><img src="image/logo3.png"></a></div>

    <div id="nav">
        <nav>
            <a href="">Places</a>
            <a href="">Recipes</a>
            <a href="">Tips</a>
            <a href="">About</a>
        </nav>
    </div>
    <div class="user">
        <p>Hello, <strong><?php echo $username; ?></strong></p>
    </div>
    <div class="login">
        <a href="logout.php"><button>LOGOUT</button></a>
    </div>
    <!-- <a href=""><div id="article"></div></a> -->
    <h1>petit déjeuner</h1>
    <p>Rump tenderloin ribeye cupim shoulder ham.</p>
    <div class="explore">
        <a href=""><button>EXPLORE</button></a>
    </div>
    


</body>
</html>