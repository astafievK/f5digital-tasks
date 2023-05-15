<?php
require '../connection.php';

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
<div class="main_screen container">
    <div class="row">
        <div class="col-5 text">
        <p class="row text-title">На что рассчитывать при взыскании неустойки по ДДУ?</p>
        <p class="text-description">Когда застройщик нарушает сроки сдачи по ДДУ, вы как дольщик имеете право требовать неустойку за просрочку, а также компенсацию убытков, вызванных этой просрочкой.</p>
        <p class="text-description">Само собой, застройщику невыгодно добровольно выплачивать вам компенсацию. Когда дело доходит до суда, суд урезает сумму неустойки на основании ст. 333 ГК РФ. Это урезание практически неизбежно.</p>
        <p class="text-description">Основная наша задача состоит в том, чтобы взыскать неустойку по ДДУ в максимальном размере, т.е. избежать сильного ее урезания. Вот что вы можете требовать от застройщика.</p>
        </div>
        <div class="content col-5">
            <?php
            if (mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    ?>
                    <div class="row">
                        <div class="accordion-item">
                                <div class="accordion-header" value="<?php echo $row['idCategory'] ?>">
                                    <div class="title d-flex container">
                                        <span class="text col-10"><?php echo $row['title']; ?></span>
                                        <?php
                                        if(isset($row['avgRating']))
                                        {
                                            ?>
                                            <div class="rate col-2">
                                                <img class="star" src="../task4/images/star-filled.svg" alt="">
                                                <span><?php echo $row['avgRating'] ?></span>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>

                                <div class="accordion-content" value="<?php echo $row['idCategory'] ?>">
                                    <span><?php echo $row['description']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>

        <div class="rating col-2 row">
            <?php
            if (mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                ?>
                <div class="rating-items">
                    <form method="POST">
                        <img class="rating-star star" id="1" value="<?php echo $row['idCategory'] ?>" src="images/star-empty.svg" alt="">
                        <img class="rating-star star" id="2" value="<?php echo $row['idCategory'] ?>" src="images/star-empty.svg" alt="">
                        <img class="rating-star star" id="3" value="<?php echo $row['idCategory'] ?>" src="images/star-empty.svg" alt="">
                        <img class="rating-star star" id="4" value="<?php echo $row['idCategory'] ?>" src="images/star-empty.svg" alt="">
                        <img class="rating-star star" id="5" value="<?php echo $row['idCategory'] ?>" src="images/star-empty.svg" alt="">
                    </form>
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