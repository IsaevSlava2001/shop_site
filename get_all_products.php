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
echo "<table border=1px;>";
echo "<tr>";
    echo "<th>id</th><th>name</th><th>description</th><th>price</th><th>amount</th>";
echo "</tr>";
foreach($products as $product)
{
    echo "<tr>";
        echo "<td>".$product['ProductID']."</td>";
        echo "<td>".$product['name']."</td>";
        echo "<td>".$product['description']."</td>";
        echo "<td>".$product['price']."</td>";
        echo "<td>".$product['amount']."</td>";
    echo "</tr>";
}
echo "</table>";
?>