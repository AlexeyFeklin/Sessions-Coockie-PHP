<?php
    session_start();
    $admin_login = "admin";
    $admin_password = "root";

    $inputed_login = $_POST["login"];
    $inputed_password = $_POST["pass"];

    if(($inputed_login == $admin_login) and ($inputed_password == $admin_password)){
        $_SESSION["isAdmin"] = true;
        unset($_SESSION["error_message"]);
        header("Location: /log/index.php");
    }
    else{
        header("Location: /log/login.php");
        $_SESSION["error_message"] = "Ошибка входа!";
    }
?>