<?php
    session_start();
    require_once "conection.php";
    $link = mysqli_connect($host, $user, $pass, $database) or die("Ошибка ". mysqli_error($link));
    $id=$_SESSION['product_id'];
    $name=$_SESSION['product_name'];
    $amount=$_SESSION['amount'];
    $description=$_SESSION['description'];
    $price=$_SESSION['price'];
    $uploadfile=$_SESSION['file'];

    $query="SELECT * FROM `product` WHERE ProductID=$id";
    $result=mysqli_query($link, $query) or die("Ошибка ". mysqli_error($link));
    if(mysqli_num_rows($result)==1)
    {
        while($row=mysqli_fetch_array($result))
        {
            $str='./files/'.$row['picture'];
        }
    }
    unlink($str);
    mysqli_close($link);
    $link = mysqli_connect($host, $user, $pass, $database) or die("Ошибка ". mysqli_error($link));
    $query="UPDATE `product` SET `name`='$name', `picture`='$uploadfile', `amount`=$amount, `description`='$description', `price`='$price' WHERE `ProductID`=$id";
    $result=mysqli_query($link, $query) or die("Ошибка ". mysqli_error($link));
    mysqli_close($link);
    unset($_SESSION['product_id']);
    unset($_SESSION['product_name']);
    unset($_SESSION['amount']);
    unset($_SESSION['description']);
    unset($_SESSION['price']);
    unset($_SESSION['file']);
    unset($_SESSION['id_product_update']);
    unset($_SESSION['name_product_update']);
    unset($_SESSION['amount_product_update']);
    unset($_SESSION['description_product_update']);
    unset($_SESSION['price_product_update']);
    header("Location:change_product.php");
?>