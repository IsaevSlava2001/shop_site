<?php
session_start();
$id=$_GET['id'];
$name=$_GET['name'];
include 'conection.php';
$link = mysqli_connect($host, $user, $pass, $database) or die("Ошибка " . mysqli_error($link));
$query = "SELECT * FROM product WHERE 1";
if(isset($id)&&$id!="")
{
    $query .=" AND ProductID = $id";
}
if(isset($name)&&$name!="")
{
    $query .=" AND name LIKE '%$name%'";
}
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if(mysqli_num_rows($result)>1)
{
    header("Location: change_product.php?error=to_much_products");
    die;
}
else if(mysqli_num_rows($result)==0)
{
    header("Location: change_product.php?error=to_less_products");
    die;
}
else if(mysqli_num_rows($result)==1)
{
    while($row=mysqli_fetch_array($result))
    {
        $_SESSION['id_product_update']=$row['ProductID'];
        $_SESSION['name_product_update']=$row['name'];
        $_SESSION['description_product_update']=$row['description'];
        $_SESSION['price_product_update']=$row['price'];
        $_SESSION['count_product_update']=$row['amount'];
    }
    header("Location: change_product.php");
    die;
}
else
{
    header("Location: change_product.php?error=another_error");
    die;
}