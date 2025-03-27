<?php
include 'header.php';
?>
<h2>Удалить продукт</h2>
<form action="confirm_delete_products.php" method="delete">
    <h3>Выберите продукт для удаления</h3>
    <input placeholder="ID" type="number" name="id" id="">
    <input placeholder="Название" type="text" name="name" id="">
    <button type="submit" onclick="return confirmDelete()">Удалить товар</button>
    <?php
    $error=(isset($_GET['error']))?$_GET['error']:"";
    switch($error)
    {
        case 'success':
            echo '<text id="good">Продукт удален</text>';
        break;
        case 'rejected':
            echo '<text id="error">Удаление отменено</text>';
        break;
        case 'error':
            echo '<text id="error">Продукт не удален</text>';
        break;
        case 'no_params':
            echo '<text id="error">Не указаны параметры</text>';
        break;
    }
    ?>
</form>
<button id="all_products">Найти все продукты</button>
<div id="ajax_all_product_container"></div>
<?php
?>
<script>
    function confirmDelete(){
        return confirm("Вы уверены, что хотите удалить товар?");
    }
</script>

