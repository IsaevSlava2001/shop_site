<?php
    include 'header.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <form action="file_handler.php" method="post" enctype="multipart/form-data">
        Название<input type="text" name="name" id=""><br>
        Количество<input type="number" name="ammount" id="" min="0"><br>
        Описание<textarea name="description" id="" rows="10"></textarea><br>
        Изображение<input type="file" name="file"><br>
        Цена<br>
        Рубли<input type="number" name="rubbles_full" id="" min="1">
        Копейки<input type="number" name="rubbles_min" id="" min="0" max="99"><br>
        <input type="submit" value="Отправить">
        <input type="reset" value="Очистить">
    </form>
    </center>
</body>
</html>