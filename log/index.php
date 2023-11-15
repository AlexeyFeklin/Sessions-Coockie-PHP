<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
</head>
<body>
<h1 style="margin: 0 auto;">Главная</h1>
    <?php
        session_start();
        if($_SESSION["isAdmin"] == true):
    ?>
     <h2>Добро пожаловать, администратор!</h2>
     <a href="/log/dislog.php">Выйти!</a>
    <?php
        endif;
        if($_SESSION["isAdmin"] != true):
    ?>
    <a href="/log/login.php">Вход</a>
    <?php
        endif;
    ?>
</body>
</html>