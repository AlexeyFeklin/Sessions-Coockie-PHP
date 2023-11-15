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
        echo $_SESSION['username'].' , ты пришел на другую страницу этого сайта!';
        echo("<br>");
    ?>
  <a href="z1_2.php">На следующую страницу </a>
</body>
</html>