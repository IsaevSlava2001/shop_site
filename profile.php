<?php
session_start();
include 'header.php';
?>
<form action="" method="post">
    <h2>Профиль</h2>
    <h3>Изменить данные</h3>
    <input type="hidden" name="id" value=<?php echo $_SESSION['id']?>>
    Фамилия <input type="text" name="surname" id="" value=<?php echo $_SESSION['surname']?> placeholder="Введите фамилию"><br>
    Имя <input type="text" name="name" id="" value=<?php echo $_SESSION['name']?> placeholder="Введите имя"><br>
    Отчество <input type="text" name="fathername" id="" value=<?php echo $_SESSION['fathername']?> placeholder="Введите отчество"><br>
    Телефон <input type="tel" name="phone" id="" value=<?php echo $_SESSION['phone']?> placeholder="Введите телефон"><br>
    Почта <input type="email" name="mail" id="" value=<?php echo $_SESSION['mail']?> placeholder="Введите новую почту"><br>
    Пароль <input type="password" name="password" id="" placeholder="Введите новый пароль"><br>
    <?php
    if($_SESSION['role']==3)
    {
        ?>
        Текущая роль<input type="text" name="role" id="" value=<?php echo $_SESSION['role']?> placeholder="Введите новую роль"><br>
        <?php
    }
    else
    {
        ?>
        Текущая роль<input type="text" readonly value=<?php echo $_SESSION['role']?> name="role" id="">
        <?php
    }
    ?>
    <input type="submit" value="Изменить">
    <?php
    $error=(isset($_GET['error']))?$_GET['error']:"";
    switch($error)
    {
        case 'success':
            echo '<text id="good">Успешно обновлено</text>';
        break;
        case 'error':
            echo '<text id="error">Произошла ошибка. Попробуйте еще раз</text>';
        break;
    }
    ?>
</form>
<?php
?>