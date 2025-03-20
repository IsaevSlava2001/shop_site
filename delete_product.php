<?php
include 'header.php';
?>
<h2>Удалить продукт</h2>
<form action="confirm_delete_products.php" method="delete">
    <h3>Выберите продукт для удаления</h3>
    <input placeholder="ID" type="number" name="id" id="">
    <input placeholder="Название" type="text" name="name" id="">
    <input type="submit" value="Удалить"><br>
    <?php
    $error=(isset($_GET['error']))?$_GET['error']:"";
    switch($error)
    {
        case 'success':
            echo '<text id="good">Продукт удален</text>';
        break;
        case 'error':
            echo '<text id="error">Продукт не удален</text>';
        break;
    }
    ?>
</form>
<button id="all_products">Найти все продукты</button>
<div id="ajax_all_product_container"></div>
<?php
?>

