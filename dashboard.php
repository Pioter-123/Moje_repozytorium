<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pizzeria "SMAK"</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="style.css"/>
</head>
<header>
        <div class="header">
            <h1>Pizzeria "SMAK"</h1>
            <p>Najlepsza w mieście</p>
          </div>
          
          <div class="navbar">
            <a href="stronaglowna.html">MENU</a>
            <a href="#">KOSZYK</a>
            <a href="registration.php" class="right">REJESTRACJA</a>
          </div>
    </header>
<body>
    <div class="form">
        <p>Hej<?php echo $_SESSION['username']; ?>!</p>
        <p>Zostałeś zalogowany.</p>
        <p><a href="login.php">Wyloguj się</a></p>
    </div>
</body>
</html>