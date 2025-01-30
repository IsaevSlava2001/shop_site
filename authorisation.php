<?php
    include 'header.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="registration.php">Регистрация</a>
    <center>
    <form action="check_auth.php" method="post">
        Введите почту<br><input type="email" name="mail" id=""><br>
        Введите пароль<br><input type="password" name="password" id=""><br>
        <input type="submit" value="Отправить">
        <input type="reset" value="Очистить">
        <?php
        $error = (isset($_GET['error']))?$_GET['error']:'';
        if ($error=='true')
        {
            echo "почта или пароль неправильные<br>";
        }
        ?>
    </form>
    </center>
</body>
</html>