<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Pizzeria "SMAK"</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="index.css">
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
<?php
    require('db.php');
    session_start();
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'><a href='login.php'>Kliknij tutaj aby zalogować się ponownie</a></p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Zaloguj się</h1>
        <input type="text" class="login-input" name="username" placeholder="Nazwa" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Hasło"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="registration.php">Nowa rejestracja</a></p>
  </form>
<?php
    }
?>
</body>
</html>