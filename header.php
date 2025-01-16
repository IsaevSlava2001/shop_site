<?php
session_start();
if (!isset($_SESSION['role']))
{
    $_SESSION['role']=0;
}
echo "Здравствуйте".$_SESSION['role']."";
if ($_SESSION['role']==0)
{
    ?>
    <a href="index.php">Главная</a>
    <a href="registration.php">Регистрация</a>
    <?php
}
else if ($_SESSION['role']==1)
{
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