<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
</head>
<body>
    <?php
        session_start();
    ?>
    <h1>Вход</h1>

    <?php
        if(isset($_SESSION["error_message"])){
            print($_SESSION["error_message"]);
        }
    ?>

    <form action="aut.php" method="post">
        <label for="">Логин</label>
        <input type="text" name="login">
        
        <label for="">Пароль</label>
        <input type="password" name="pass">
        <br>
        <input type="submit">
    </form>
</body>
</html>