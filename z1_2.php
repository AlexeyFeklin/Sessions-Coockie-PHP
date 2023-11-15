<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESSION EXAMPLE</title>
</head>
<body>
    <?
        session_start();
        unset($_SESSION['username']); // разрегистрировали переменную
        echo 'Привет, '.$_SESSION['username'];
        /* теперь имя пользователя уже не выводится */
        session_destroy();

    ?>
</body>
</html>