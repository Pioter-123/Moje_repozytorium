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
    if (isset($_REQUEST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Zarejestrowano pomyślnie.</h3><br/>
                  <p class='link'><a href='login.php'>Kliknij, aby się zalogować</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Brak wypełnionych pól.</h3><br/>
                  <p class='link'><a href='registration.php'>Kliknij tutaj, aby zalogować się ponownie</a></p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Rejestreacja</h1>
        <input type="text" class="login-input" name="username" placeholder="Nazwa" required />
        <input type="email" class="login-input" name="email" placeholder="E-mail">
        <input type="password" class="login-input" name="password" placeholder="Hasło">
        <input type="submit" name="submit" value="Rejestracja" class="login-button">
        <p class="link"><a href="login.php">Kliknij, aby się zalogować</a></p>
    </form>
<?php
    }
?>
</body>
</html>