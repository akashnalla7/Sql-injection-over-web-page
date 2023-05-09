<?php
/* Initialize the session */
session_start();
 
/* Check if the user is logged in, if not then redirect him to login page */
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style_welcome.css">
</head>
<body>
    <div class="banner">
        
        <div class="navbar">
            <img src="logo.png" class="logo">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">About</a></li>
                <li><a href="logout.php" class="btn btn-danger">Logout</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>Flat 15% Off</h1>
            <P>Super Value deals on All Products and Save more with coupons & upto 70% off!</P>
            
            <div>
                <button type="button"><span></span>Shop Now</button>
            </div>

        </div>
    </div>
</body>
</html>