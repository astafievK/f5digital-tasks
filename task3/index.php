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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="styles.css">

    <title>task3</title>
</head>
<body>
<div class="container main_screen">
    <div class="row">
        <div class="col-lg-5 col-xl-5 text">
            <span class="row text-title">На что рассчитывать при взыскании неустойки по ДДУ?</span>
            <span class="row text-description">
                Когда застройщик нарушает сроки сдачи по ДДУ, вы как дольщик имеете право требовать неустойку за просрочку, а также компенсацию убытков, вызванных этой просрочкой.
                <br><br>Само собой, застройщику невыгодно добровольно выплачивать вам компенсацию. Когда дело доходит до суда, суд урезает сумму неустойки на основании ст. 333 ГК РФ. Это урезание практически неизбежно.
                <br><br>Основная наша задача состоит в том, чтобы взыскать неустойку по ДДУ в максимальном размере, т.е. избежать сильного ее урезания. Вот что вы можете требовать от застройщика.
            </span>
        </div>

        <div class="col-lg-7 content container">
                <?php
                if (mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        ?>
                            <div class="row accordion-item">
                                <div class="accordion-header col-lg-10" value="<?php echo $row['idCategory'] ?>">
                                    <div class="title d-flex container">
                                        <span class="text d-flex col-xl-10"><?php echo $row['title']; ?></span>
                                        <?php
                                        if(isset($row['avgRating']))
                                        {
                                            ?>
                                            <div class="rate d-flex col-xl-2">
                                                <img class="star" src="images/star filled.svg" alt="">
                                                <span><?php echo $row['avgRating'] ?></span>
                                            </div>
                                            <?php
                                        }
                                            ?>
                                    </div>
                                </div>

                                <div class="rating-items d-flex col-lg-2">
                                    <form method="POST">
                                        <img class="rating-star star" id="1" value="<?php echo $row['idCategory'] ?>" src="images/star empty.svg" alt="">
                                        <img class="rating-star star" id="2" value="<?php echo $row['idCategory'] ?>" src="images/star empty.svg" alt="">
                                        <img class="rating-star star" id="3" value="<?php echo $row['idCategory'] ?>" src="images/star empty.svg" alt="">
                                        <img class="rating-star star" id="4" value="<?php echo $row['idCategory'] ?>" src="images/star empty.svg" alt="">
                                        <img class="rating-star star" id="5" value="<?php echo $row['idCategory'] ?>" src="images/star empty.svg" alt="">
                                    </form>
                                </div>

                                <div class="row">
                                    <div class="accordion-content col-lg-10" value="<?php echo $row['idCategory'] ?>">
                                        <span><?php echo $row['description']; ?></span>
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
<script src="accordion.js"></script>
<script src="rating.js"></script>
</body>
</html>
