<?php 
// Include database connection using PDO
include "db_connect.php"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Global and page-specific CSS -->
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/last_race.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>F1DB - Last Race</title>
</head>

<body>
    <?php 
    // Include header, reusable card function, and alert utility
    include "Header.php";
    include "reusable/card.php";
    include "reusable/alert.php"; 
    ?>

    <div class="main-container">
        <?php
        try {
            // Fetch the latest race that has already happened (date <= today)
            $latestRaceStmt = $pdo->prepare("SELECT * FROM `race` WHERE date <= CURRENT_DATE ORDER BY id DESC;");
            $latestRaceStmt->execute();
            $latestRace = $latestRaceStmt->fetch(PDO::FETCH_ASSOC);

            // Get the race ID for fetching results
            $raceID = $latestRace["id"];

            // Loop backwards through races if no results found for latest
            while (true) {
                $positionStmt = $pdo->prepare(
                    "SELECT * FROM `race_data` 
                     WHERE `type` = 'RACE_RESULT' AND `race_id` = :raceID 
                     ORDER BY `position_display_order` ASC;"
                );
                $positionStmt->execute([":raceID" => $raceID]);

                // If no results found, check the previous race
                if($positionStmt->rowCount() === 0) { 
                    $raceID--; 
                    continue; 
                }

                // Fetch all race results for display
                $position = $positionStmt->fetchAll(PDO::FETCH_ASSOC);
                break;
            }
        ?>
            <!-- Display basic race info -->
            <h2 class="raceInfoHeader">
                <?php echo "<strong>Official Name:</strong> " . $latestRace['official_name']; ?>
            </h2>
            <h2>
                <?php echo "<strong>Circuit:</strong> " . $latestRace['circuit_id']; ?>
            </h2>
            <br>
            <h2>
                <?php echo "<strong>Date:</strong> " . $latestRace['date']; ?>
            </h2>
            <hr>

            <!-- Race results table -->
            <table>
                <?php
                foreach ($position as $row) {
                    // Clean up driver ID and position display order
                    $driverID = str_replace('-', ' ', $row['driver_id']);
                    $posOrder = str_replace('-', ' ', $row['position_display_order']);
                    $constructor = str_replace('-', '', $row['constructor_id']);
                    $constructor = strtolower($constructor);

                    // Highlight the row if the user's team matches the constructor
                    if (isset($_SESSION['userEmail']) && $constructor == strtolower($_SESSION['userTeam'])) {
                        makeRaceCard($driverID, $posOrder, $constructor, true);
                    } else {
                        makeRaceCard($driverID, $posOrder, $constructor, false);
                    }
                }
                ?>
            </table>
        <?php 
        } catch (PDOException $e) {
            // Show alert if there is a database error
            jsAlert('Error connecting to DataBase.' . $e->getMessage());
        }
        ?>
    </div>

    <!-- Include footer -->
    <?php include "Footer.php"; ?>
</body>
</html>
