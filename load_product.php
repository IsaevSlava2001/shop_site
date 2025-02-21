<?php
session_start();
$product_name=$_SESSION["product_name"];
$ammount=$_SESSION["ammount"];
$description=$_SESSION["description"];
$rubbles_full=$_SESSION["rubbles_full"];
$rubbles_min=$_SESSION["rubbles_min"];
$file=$_SESSION['file'];
$price=$rubbles_full*100+$rubbles_min;
include 'conection.php';
$link = mysqli_connect($host, $user, $pass, $database) or die("Ошибка " . mysqli_error($link));
$query = "INSERT INTO product (`ProductID`, `name`, `amount`, `description`, `picture`, `price`) VALUES (NULL,'$product_name', '$ammount', '$description', '$file','$price')";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if ($result)
{
    echo "Данные успешно добавлены";
    echo "<a href='add_product.php'>Назад</a>";
}
else
{
    echo "Ошибка";
    echo "<a href='add_product.php'>Назад</a>";
}
?>