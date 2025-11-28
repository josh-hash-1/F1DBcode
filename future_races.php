<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/future_races.css">
    <title>F1DB - Future Races</title>
</head>

<body>
    <?php include "Header.php"; ?>
    <div class="main-container">
        <?php
        include "db_connect.php";
        try {
            $stmt = $pdo->prepare("SELECT * FROM `race` WHERE date > CURRENT_DATE;");
            $stmt->execute();
            $upcomingRaces = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($upcomingRaces as $race) {
                $name = $race["official_name"];
                $circuit = $race["circuit_id"];
                $date = $race["date"];
                echo "
                    <div class='race-div'>
                        <h1>$name</h1>
                        <div class='inner-div'>
                            <h2>Circuit: $circuit</h2>
                            <h2>Date: $date</h2>
                        </div>
                    </div>
                ";
            }
        } catch (PDOException $e) {
            echo "Error connecting to DataBase.". $e->getMessage();
        }
        ?>
        <hr>
    </div>
    <?php include "Footer.php"; ?>
</body>

</html>