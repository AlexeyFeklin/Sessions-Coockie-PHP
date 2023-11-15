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
        $_SESSION['username'] = "maksim";
        echo 'Привет, '.$_SESSION['username']."<br>";
    ?> 
    <a href="/z1_1.php">На следующую страницу </a>


</body>
</html>