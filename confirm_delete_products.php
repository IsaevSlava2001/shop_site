<?php
require_once 'conection.php';
$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));

// Получаем данные (проверяем метод запроса)
$ID = mysqli_real_escape_string($link, $_REQUEST['id'] ?? null);
$name = mysqli_real_escape_string($link, $_REQUEST['name'] ?? null);

// Проверяем, получены ли параметры
if ($ID === null && $name === null) {
    header("Location: delete_product.php?error=no_params");
    exit();
}

// Формируем безопасный SQL-запрос
$query = "DELETE FROM product WHERE 1=1";
$params = [];

if (!empty($ID)) {
    $query .= " AND ProductID = $ID";
}

if (!empty($name)) {
    $query .= " AND `name` = $name";
}

// Выполняем запрос
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if ($result) {
    header("Location: delete_product.php?error=success");
} else {
    header("Location: delete_product.php?error=error");
}



mysqli_close($link);
exit();
?>
