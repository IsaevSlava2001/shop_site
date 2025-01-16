<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="authorisation.php">Авторизация</a>
    <center>
    <form action="check_registration.php" method="post">
        Фамилия <input type="text" name="surname" id=""><br>
        Имя <input type="text" name="name" id=""><br>
        Отчество <input type="text" name="fathername" id=""><br>
        Номер телефона<input type="tel" name="phone" id=""><br>
        Почта<input type="email" name="email" id=""><br>
        Пароль<input type="password" name="password" id=""><br>
        Повторите пароль<input type="password" name="rep_password" id=""><br>
        <input type="submit" value="Отправить">
        <input type="reset" value="Очистить">
    </form>
    </center>
</body>
</html>