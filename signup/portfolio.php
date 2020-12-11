<?php
session_start();

if(!isset($_SESSION['username'])){
    echo "You are logged out";
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabirul Islam's Portfolio</title>
    
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
</head>
<body>
    <header class="container">
    <nav class="navbar">
        <div class="logo">
            <a href="#" target="_blank">Sabirul Islam</a>
        </div>
        <div class="menu">
            <ul>
                <li><a href="#" class="active">home</a></li>
                <li><a href="#">gallery</a></li>
                <li><a href="#">services</a></li>
                <li><a href="#">portfolio</a></li>
                <li><a href="#">about</a></li>
            </ul>
        </div>
        <div class="contact_btn">
            <a href="logout.php">Logout</a>
        </div>
    </nav>

    <div class="center_content">
        <h1>Hello this is <?php echo $_SESSION['username'] ?></h1>
        <h2>full stack web developer</h2>
    </div>

    <div class="social_network">
        <div class="fa_icons">
            <a href="https://www.facebook.com/mdsabirulislam.shimul" target="_blank">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
        </div>
        <div class="fa_icons">
            <a href="https://www.twitter.com/mdsabirulislam_" target="_blank">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
        </div>
        <div class="fa_icons">
            <a href="https://www.pinterest.com/mdsabirulislamshimul" target="_blank">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
            </a>
        </div>
        <div class="fa_icons">
            <a href="https://www.youtube.com/channel/UCILPl3huxZ1tdznJgxupwVg" target="_blank">
                <i class="fa fa-youtube" aria-hidden="true"></i>
            </a>
        </div>
    </div>

    <!-- <div class="grid_sec">
        <img src="images/grid.png" alt="">
    </div> -->

    </header>
</body>
</html>