<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOCKIE EXAMPLE</title>
</head>

<body>
    <?php
        $cookie_name = "user";
        $cookie_value = "Max Maximov";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 7)); // 86400 сек = 1 сутки
    ?>
    <html>

    <body>

        <?php
            if (!isset($_COOKIE[$cookie_name])) {
                echo "Куки с именем '" . $cookie_name . "' не установлен!";
            } 
            else {
                echo "Куки '" . $cookie_name . "' установлен!<br>";
                echo "Значение: " . $_COOKIE[$cookie_name];
            }
        ?>
    </body>

    </html>