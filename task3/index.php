<?php
require_once '../connection.php';

$result = mysqli_query($conn, "SELECT * FROM categories ORDER BY avgRating DESC");
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../assets/libraries/bootstrap-grid.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

    <title>Задание 3</title>
</head>
<body>
<div class="main_screen container-fluid">
    <div class="row">
        <div class="col-12 col-lg-5 text">
            <div class="text-title">
                На что рассчитывать при взыскании неустойки по ДДУ?
            </div>
            <div class="text-description">
                Когда застройщик нарушает сроки сдачи по ДДУ, вы как дольщик имеете право требовать неустойку за просрочку, а также компенсацию убытков, вызванных этой просрочкой.<br><br>
                Само собой, застройщику невыгодно добровольно выплачивать вам компенсацию. Когда дело доходит до суда, суд урезает сумму неустойки на основании ст. 333 ГК РФ. Это урезание практически неизбежно.<br><br>
                Основная наша задача состоит в том, чтобы взыскать неустойку по ДДУ в максимальном размере, т.е. избежать сильного ее урезания. Вот что вы можете требовать от застройщика.<br><br>
            </div>
        </div>
        <div class="content col-12 col-lg-7">
            <?php
            if (mysqli_num_rows($result) > 0)
            {
            while($row = mysqli_fetch_assoc($result))
            {
            ?>
                <div class="row">
                    <div class="accordion-item">
                        <div class="accordion-wrapper">
                            <div class="accordion-header">
                                <div class="title-wrapper">
                                    <div class="title container-fluid">
                                        <span class="text col-9 col-lg-9"><?php echo $row['title'] ?></span>
                                        <div class="rate offset-1 col-2 offset-lg-1 col-lg-2">
                                            <?php
                                                if($row['avgRating'] != 0)
                                                {
                                            ?>
                                            <img class="star" src="../task4/images/star-filled.svg" alt="">
                                            <span><?php echo $row['avgRating'] ?></span>
                                            <?php
                                                }
                                            ?>
                                            <div class="spoiler-wrapper">
                                                <div class="spoiler"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-content">
                                <div><?php echo $row['description'] ?></div>
                            </div>
                        </div>
                        
                        <div class="rating-items">
                            <form action="index.php" method="POST">
                                <img class="rating-star star" id="1" value="<?php echo $row['idCategory'] ?>" src="images/star-empty.svg" alt="">
                                <img class="rating-star star" id="2" value="<?php echo $row['idCategory'] ?>" src="images/star-empty.svg" alt="">
                                <img class="rating-star star" id="3" value="<?php echo $row['idCategory'] ?>" src="images/star-empty.svg" alt="">
                                <img class="rating-star star" id="4" value="<?php echo $row['idCategory'] ?>" src="images/star-empty.svg" alt="">
                                <img class="rating-star star" id="5" value="<?php echo $row['idCategory'] ?>" src="images/star-empty.svg" alt="">
                            </form>
                        </div>
                    </div>
                </div>
            <?php
            }
            }
            ?>
        </div>
    </div>
</div>

<script src="../assets/libraries/jquery-3.7.0.min.js"></script>
<script src="accordion.js"></script>
<script src="rating.js"></script>
</body>
</html>