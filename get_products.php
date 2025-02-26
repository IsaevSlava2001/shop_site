<?php
$name=$_GET['name'];
$sort=$_GET['sort'];
include 'conection.php';
$link = mysqli_connect($host, $user, $pass, $database) or die("Ошибка " . mysqli_error($link));
$query = "SELECT * FROM product WHERE 1";
if((isset($name) && $name!="")||(isset($sort) && $sort!="default"))
{
    if(isset($name)&&$name!="")
    {
        $query .=" AND name LIKE '%$name%'";//$name=$name.""
    }
    if($sort=="name")
    {
        $query.=" ORDER BY name";
    }
    else if($sort=="name_desc")
    {
        $query.=" ORDER BY name DESC";
    }
    else if($sort=="price")
    {
        $query.=" ORDER BY price";
    }
    else if($sort=="price_desc")
    {
        $query.=" ORDER BY price DESC";
    }
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    $products = array();
    while($row=mysqli_fetch_array($result))
    {
        $products[] = $row;
    }
    echo json_encode($products);
}
else
{
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    $products = array();
    while($row=mysqli_fetch_array($result))
    {
        $products[] = $row;
    }
}