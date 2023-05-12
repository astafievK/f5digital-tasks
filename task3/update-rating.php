<?php
require '../connection.php';

$id = $_POST['id'];
$value = $_POST['value'];

$sql = "INSERT INTO category_rating(idCategory, rating) VALUES('$value', '$id')";
if (mysqli_query($conn, $sql)) {
    echo 'Данные успешно добавлены в базу данных';
} else {
    echo 'Ошибка: ' . $sql . '<br>' . mysqli_error($conn);
}
