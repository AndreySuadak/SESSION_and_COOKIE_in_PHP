<?php
    session_start();
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['text'] = $_POST['text'];

    setcookie("name", $_POST['name'], time() + 360);
    setcookie("text", $_POST['text'], time() + 360);

    header("Location: index.php");
?>
