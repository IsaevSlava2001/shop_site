<?php
require 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
    require_once 'get_products.php';
    ?>
    <br>
    <br>
    <center>
        <input type="text" name="search" id="product_find_text" placeholder="Название товара">
        <select name="sorting" id="product_find_sort">
            <option value="default"></option>
            <option value="name">Название(По возрастанию)</option>
            <option value="name_desc">Название(По убыванию)</option>
            <option value="price">Цена(По возрастанию)</option>
            <option value="price_desc">Цена(По убыванию)</option>
        </select>
        <button id="product_find_submit">Найти</button>
        <button id="product_find_reset">Сбросить</button>
    </center>
    <div class="catalog">
        <?php
        $i=1;
        foreach ($products as $product)
        {
            if($i==1||$i%4==1)
            {
                echo "<div class='row'>";
            }
            echo "<div class='product'>";
            echo "<img src='files/".$product['picture']."'>";
            echo "<h3>".$product['name']."</h3>";
            echo "<p>".$product['description']."</p>";
            echo "<p>".($product['price']/100)." руб. ".($product['price']%100)." коп. "."</p>";
            echo "<a href='product.php?id=".$product['ProductID']."'>Подробнее</a>";
            echo "</div>";
            if($i%4==0)
            {
                echo "</div>";
            }
            $i++;
        }
        ?>
    </div>
</body>
</html>