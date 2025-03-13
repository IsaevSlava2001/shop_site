<?php
include 'header.php';
?>
<h2>Изменить продукт</h2>
<form action="find_products.php" method="get">
    <h3>Найдите продукт</h3>
    <input type="number" name="id" id="">
    <input type="text" name="name" id="">
    <input type="submit" value="Найти">
    <?php
    $error=(isset($_GET['error']))?$_GET['error']:"";
    switch($error)
    {
        case 'to_much_products':
            echo '<text id="error">Слишком много продуктов найдено. Укажите конкретный продукт</text>';
        break;
        case 'to_less_products':
            echo '<text id="error">Продукт не найден. Попробуйте расширить поисковые данные</text>';
        break;
        case 'another_error':
            echo '<text id="error">Произошла ошибка. Попробуйте еще раз</text>';
    }
    ?>
</form>
<?php
if(!isset($_SESSION['id_product_update'])|| $_SESSION['id_product_update']==NULL)
{
    ?>
    <button id="all_products">Найти все продукты</button>
    <div id="ajax_all_product_container"></div>
    <?php
}
else
{
    ?>
    <h3>Измените продукт</h3>
    <h4>Текущие значения</h4>
    Название <input type="text" name="name" readonly id="" value=<?php echo $_SESSION['name_product_update']?>><br>
    Описание <textarea name="description" readonly id=""> <?php echo $_SESSION['description_product_update']?></textarea><br>
    Цена <input type="text" name="price" readonly id="" value=<?php echo $_SESSION['price_product_update']?>><br>
    Количество <input type="text" name="amount" readonly id="" value=<?php echo $_SESSION['count_product_update']?>><br>
    <form action="" method="post" enctype="multipart/form-data">
        <h4>Измените значения</h4>
        <input type="file" name="file[]" id="" class="cr_file"><br>
        <input type="hidden" name="id" value=<?php echo $_SESSION['id_product_update']?>>
        Название <input type="text" name="name" id=""><br>
        Описание <textarea name="description" id=""></textarea><br>
        Цена <input type="number" name="price" id=""><br>
        Количество <input type="text" name="amount" id=""><br>
        <input type="submit" value="Изменить">
        <?php
        $error=(isset($_GET['error']))?$_GET['error']:"";
        switch($error)
        {
            case 'success':
                echo '<text id="good">Успешно обновлено</text>';
            break;
            case 'error':
                echo '<text id="error">Неизвестная ошибка</text>';
            break;
        }
        ?>
    </form>
    <?php
}
