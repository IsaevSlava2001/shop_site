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
    <div class="menu_product_container">
        <a href="product_work.php">Работа с товаром</a>
        <div class="dropdown_product_content" style="display:none;">
            <a href="add_product.php">Добавление товара</a>
            <a href="delete_product.php">Удаление товара</a>
            <a href="change_product.php">Изменение товара</a>
        </div>
    </div>
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
    <div class="menu_product_container">
        <a href="product_work.php">Работа с товаром</a>
        <div class="dropdown_product_content" style="display:none;">
            <a href="add_product.php">Добавление товара</a>
            <a href="delete_product.php">Удаление товара</a>
            <a href="change_product.php">Изменение товара</a>
        </div>
    </div>
    <a href="user_work.php">Работа с пользователями</a>
    <a href="exit.php">Выход</a>
    <?php
}
?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="script.js"></script>
