<?php
include 'conection.php';
$link = mysqli_connect($host, $user, $pass, $database) or die("Ошибка " . mysqli_error($link));
$query = "SELECT * FROM product";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
$products = array();
while($row=mysqli_fetch_array($result))
{
    $products[] = $row;
}