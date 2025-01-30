<?php
session_start();
if (!isset($_SESSION['role']))
{
    $_SESSION['role']=0;
}
if ($_SESSION['role']==0)
{
    ?>
    <a href="index.php">Главная</a>
    <a href="registration.php">Регистрация</a>
    <a href="authorisation.php">Авторизация</a>
    <?php
}
else if ($_SESSION['role']==1)
{
    echo "Здравствуйте, ".$_SESSION['surname']." ".$_SESSION['name']." ".$_SESSION['fathername']."<br>";
    ?>
    <a href="index.php">Главная</a>
    <a href="profile.php">Профиль</a>
    <a href="cart.php">Корзина</a>
    <a href="delivery.php">Доставка</a>
    <a href="exit.php">Выход</a>
    <?php
}
else if ($_SESSION['role']==2)
{
    echo "Здравствуйте, ".$_SESSION['surname']." ".$_SESSION['name']." ".$_SESSION['fathername']."<br>";
    ?>
    <a href="index.php">Главная</a>
    <a href="profile.php">Профиль</a>
    <a href="cart.php">Корзина</a>
    <a href="delivery.php">Доставка</a>
    <a href="product_work.php">Работа с товаром</a>
    <a href="exit.php">Выход</a>
    <?php
}
else if ($_SESSION['role']==3)
{
    echo "Здравствуйте, ".$_SESSION['surname']." ".$_SESSION['name']." ".$_SESSION['fathername']."<br>";
    ?>
    <a href="index.php">Главная</a>
    <a href="profile.php">Профиль</a>
    <a href="cart.php">Корзина</a>
    <a href="delivery.php">Доставка</a>
    <a href="product_work.php">Работа с товаром</a>
    <a href="user_work.php">Работа с пользователями</a>
    <a href="exit.php">Выход</a>
    <?php
}
?>