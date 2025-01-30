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
        <input type="reset" value="Очистить"><br>
        <?php
        $error = (isset($_GET['error']))?$_GET['error']:'';
        if ($error=='true')
        {
            $surname=$_GET['surname_fill'];
            $name=$_GET['name_fill'];
            $fathername=$_GET['fathername_fill'];
            $phone=$_GET['phone_fill'];
            $email=$_GET['email_fill'];
            $password=$_GET['password_fill'];
            $rep_password=$_GET['rep_password_fill'];
            $phone_true=$_GET['phone_true'];
            $email_true=$_GET['email_true'];
            $password_true=$_GET['password_true'];
            $mail_exists=$_GET['mail_exists'];
        
            if ($surname==0)
            {
                echo "Фамилия не введена<br>";
            }
            if ($name==0)
            {
                echo "Имя не введено<br>";
            }
            if ($fathername==0)
            {
                echo "Отчество не введено<br>";
            }
            if ($phone==0)
            {
                echo "Телефон не введен<br>";
            }
            if ($email==0)
            {
                echo "Почта не введена<br>";
            }
            if ($password==0)
            {
                echo "Пароль не введен<br>";
            }
            if ($rep_password==0)
            {
                echo "Повторите пароль<br>";
            }
            if ($phone_true==0)
            {
                echo "Телефон введен неверно<br>";
            }
            if ($email_true==0)
            {
                echo "Почта введена неверно<br>";
            }
            if ($password_true==0)
            {
                echo "Пароли не совпадают<br>";
            }
            if($mail_exists==1)
            {
                echo "Почта уже зарегистрирована<br>";
            }
        }
        ?>
    </form>
    </center>
</body>
</html>