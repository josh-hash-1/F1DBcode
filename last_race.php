<?php include "db_connect.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/last_race.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>F1DB - Last Race</title>
</head>

<body>
    <?php include "Header.php";
    include "reusable/card.php"; include "reusable/alert.php"; ?>
    <div class="main-container">
        <?php
        try {
            $latestRaceStmt = $pdo->prepare("SELECT * FROM `race` WHERE date <= CURRENT_DATE ORDER BY id DESC;");
            $latestRaceStmt->execute();
            $latestRace = $latestRaceStmt->fetch(PDO::FETCH_ASSOC);

            $positionStmt = $pdo->prepare("SELECT * FROM `race_data` WHERE `type` = 'RACE_RESULT' AND `race_id` = :raceID ORDER BY `position_display_order` ASC;");
            $positionStmt->execute([":raceID" => $latestRace['id']]);
            $position = $positionStmt->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <h2 class="raceInfoHeader"><?php echo "<strong>Official Name:</strong> " . $latestRace['official_name']; ?></h2>
            <h2><?php echo "<strong>Circuit:</strong> " . $latestRace['circuit_id']; ?></h2>
            <br>
            <h2><?php echo "<strong>Date:</strong> " . $latestRace['date']; ?></h2>
            <hr>
            <table>
                <?php

                foreach ($position as $row) {
                    $driverID = str_replace('-', ' ', $row['driver_id']);
                    $posOrder = str_replace('-', ' ', $row['position_display_order']);
                    $constructor = str_replace('-', '', $row['constructor_id']);

                    $constructor = strtolower($constructor);

                    if (isset($_SESSION['userEmail']) && $constructor == strtolower($_SESSION['userTeam'])) {
                        makeRaceCard($driverID, $posOrder, $constructor, true);
                    } else {
                        makeRaceCard($driverID, $posOrder, $constructor, false);
                    }
                }
        } catch (PDOException $e) {
            jsAlert('Error connecting to DataBase.'. $e->getMessage());
        }
        ?>
        </table>
    </div>
    <?php include "Footer.php"; ?>
</body>

</html>