<?php
require '../connection.php';

$limit = 9;
$shownProducts = mysqli_query($conn,
    "SELECT idProduct, category, products.title 'productTitle', code, count, price, products.idStatus, image, statuses.idStatus, statuses.title 'statusTitle' FROM products 
            LEFT JOIN statuses ON products.idStatus = statuses.idStatus ORDER BY statuses.idStatus DESC");

function printProducts($row): void
{
    ?>
    <div class="card-wrapper col-xl-4 col-md-6">
        <div class="card <?php checkProductStatusAsClass($row['statusTitle'], $row['count'])?>">
            <div class="product_image">
                <img src="images/<?php echo $row['image']?>.svg" alt="">
                <span class="status-top">ХИТ ПРОДАЖ</span>
                <span class="status-promo">АКЦИЯ</span>
                <span class="status-new">НОВИНКА</span>
                <span class="in-stock">В наличии</span>
            </div>

            <div class="product_description">
                <div class="row">
                    <span class="category"><?php echo $row['category'] ?></span>
                    <span class="title"><?php echo $row['productTitle'] ?></span>
                    <span class="code_title">Артикул: <span class="code"><?php echo $row['code'] ?></span></span>
                    <span class="price_title">от: <span class="price"><?php echo $row['price'] ?></span>Р</span>
                </div>
            </div>
        </div>
    </div>
<?php
}

function checkProductStatusAsClass($status, $count):void{
    switch ($status) {
        case null:
            echo "no-promo";
            break;
        case 'НОВИНКА':
            echo "new";
            break;
        case 'АКЦИЯ':
            echo "promo";
            break;
        case 'ХИТ ПРОДАЖ':
            echo "top";
            break;
    }

    if($count > 0)
        echo " in-stock";
}

function checkProductStatusAsSpan($status, $count):void{
    switch ($status) {
        case null:
            echo "no-promo";
            break;
        case 'НОВИНКА':
            echo "new";
            break;
        case 'АКЦИЯ':
            echo "promo";
            break;
        case 'ХИТ ПРОДАЖ':
            echo "top";
            break;
    }

    if($count > 0)
        echo " in-stock";
}

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <link href="../assets/libraries/bootstrap-grid.css" rel="stylesheet">

    <title>task5</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="container">
        <div class="row row-cols-md-4 row-cols-2" style="margin: auto">
            <label class="check col-lg col-md col">
                <input class="real_check" id="top" type="checkbox">
                <span class="custom_check"></span>
                <span class="custom_check_title">ХИТ ПРОДАЖ</span>
            </label>

            <label class="check col-lg col-md col">
                <input class="real_check" id="new" type="checkbox">
                <span class="custom_check"></span>
                <span class="custom_check_title">НОВИНКИ</span>
            </label>

            <label class="check col-lg col-md col">
                <input class="real_check" id="promo" type="checkbox">
                <span class="custom_check"></span>
                <span class="custom_check_title">АКЦИЯ</span>
            </label>

            <label class="check col-lg col-md col">
                <input class="real_check" id="in-stock" type="checkbox">
                <span class="custom_check"></span>
                <span class="custom_check_title">В НАЛИЧИИ</span>
            </label>

            <button class="col-lg col-md col" id="accept" type="button">ПРИМЕНИТЬ</button>
        </div>
    </div>
</header>

<div class="container">
        <?php
        if (mysqli_num_rows($shownProducts) > 0) {
            echo '<div class="content row">';
        }

        while($row = mysqli_fetch_assoc($shownProducts)) {
            printProducts($row, 'top');
        }
    ?>
    <div class="row">
        <button type="button" id="showMore">Показать еще</button>
    </div>
</div>
<script src="script.js" type="module"></script>
</body>
</html>