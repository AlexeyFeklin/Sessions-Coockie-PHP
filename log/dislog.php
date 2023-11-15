<?php
    session_start();
    $_SESSION["isAdmin"] = false;
    header("Location: /log/index.php");
?>