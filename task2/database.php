<?php
// Создание подключения к БД
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "f5digital";

$connectionToDatabase = mysqli_connect($servername, $username, $password, $dbname);
if (!$connectionToDatabase) {
    die("Не соединено - " . mysqli_connect_error());
}

$query = "SELECT * FROM problems";

$result = mysqli_query($connectionToDatabase, $query);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="heading<?php echo $row['id']; ?>">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $row['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $row['id']; ?>">
                            <?php echo $row['title']; ?>
                        </button>
                    </h2>
                </div>

                <div id="collapse<?php echo $row['id']; ?>" class="collapse" aria-labelledby="heading<?php echo $row['id']; ?>" data-parent="#accordionExample">
                    <div class="card-body">
                        <h4><?php echo $row['title']; ?></h4>
                        <p><?php echo $row['description']; ?></p>
                        <p>Rating: <?php echo $row['rating']; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
} else {
    echo "No problems found.";
}

// Закрытие подключения к БД
mysqli_close($connectionToDatabase);
?>