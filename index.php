<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Kuzmishchev Andrey andriisudak@mail.ru">
        <meta name="generator" content="Hugo 0.84.0">
        <title>SESSION_AND_COOKIE</title>
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
        <div class="wrapper">
            <form class="" action="/action.php" method="post">
                Имя <br>
                <input type="text" name="name" value=""><br><br>
                text <br>
                <input type="text" name="text" value=""><br><br>
                <button type="submit" name="button">Отправить</button>
            </form><br>

            <?php
                echo  "<div class='sess'>" . "Работаем с SESSION" . "<br>";

                if($_SESSION['name'] != "" || $_SESSION['text'] != "") {
                    echo 'Имя: <span>' . $_SESSION['name'] . '</span><br>';
                    echo 'текст: <span>' . $_SESSION['text'] . '</span><br>';
                } else {
                    echo 'Имя: вы не заполнили форму' . '<br>';
                    echo 'текст: вы не заполнили форму' . '<br>';
                };

                echo "Удаляем SESSION обнуляя массив $_SESSION = array(); так ка session_destroy(); не помогла" . "<br>";
                $_SESSION = array();
                session_destroy();
                echo "После удаления сесии" . '<br>';
                echo 'Имя: ' . $_SESSION['name'] . '<br>';
                echo 'текст: ' . $_SESSION['text'] . '</div><br>';

                echo  "<br><div class='cook'>" . "Работаем с КУКИ" . "<br>";
                if($_COOKIE['name'] != "" || $_COOKIE['text'] != "") {
                    echo 'Имя: <span>' . $_COOKIE['name'] . "</span><br>";
                    echo 'текст: <span>' . $_COOKIE['text'] . "</span></div><br>";
                } else {
                    echo 'Имя: ' . "<br>";
                    echo 'текст: ' . "</div><br>";
                };
            ?>
        </div>
    </body>
</html>
