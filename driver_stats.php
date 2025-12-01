<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/driver.css">
    <title>F1DB - Driver</title>
</head>

<body>
    <?php 
    include "Header.php";
    include "db_connect.php";
    include "reusable/alert.php"; 

    // Get driver name from query parameter
    $driverName = $_GET["driver"];

    // Split first and last name
    $parts = explode(" ", $driverName);
    $lowerLast = strtolower($parts[1]); // used for image filename

    try {
        // Fetch driver details from DB
        $stmt = $pdo->prepare("SELECT * FROM `driver` WHERE name = :driverName;");
        $stmt->execute([":driverName" => $driverName]);
        $current = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        jsAlert("Error connecting to DB." . $e->getMessage());
    }

    // Map drivers to their teams
    function teamAssociate($driver)
    {
        $driversToConstructors = [
            "lando norris" => "mclaren",
            "oscar piastri" => "mclaren",
            "max verstappen" => "redbull",
            "yuki tsunoda" => "redbull",
            "george russell" => "mercedes",
            "kimi antonelli" => "mercedes",
            "lewis hamilton" => "ferrari",
            "charles leclerc" => "ferrari",
            "alexander albon" => "williams",
            "carlos sainz" => "williams",
            "liam lawson" => "racingbulls",
            "isack hadjar" => "racingbulls",
            "esteban ocon" => "haas",
            "oliver bearman" => "haas",
            "lance stroll" => "astonmartin",
            "fernando alonso" => "astonmartin",
            "nico hulkenberg" => "sauber",
            "gabriel bortoleto" => "sauber",
            "pierre gasly" => "alpine",
            "franco colapinto" => "alpine"
        ];

        $driverLower = strtolower($driver);
        return $driversToConstructors[$driverLower] ?? null;
    }

    // Get driver team
    $driver_team = teamAssociate($driverName);
    ?>

    <div class="main-container">
        <div class="card">
            <div class="name-div">
                <!-- Link back to all drivers -->
                <a href="drivers_current.php">← All Drivers</a>

                <div class="inner-name-div">
                    <h1><?php echo $parts[0]; ?></h1>
                    <h1><?php echo $parts[1]; ?></h1>
                </div>

                <!-- Team logo -->
                <img id="team-logo" src="<?php echo "Images/$driver_team-logo.png"; ?>" alt="Team Image">
            </div>

            <!-- Driver headshot -->
            <img id="driver-img" src="<?php echo "Images/{$lowerLast}_headshot.png"; ?>" alt="Driver Image">

            <!-- Personal info -->
            <div class="textItems">
                <div class="group">
                    <label>Permanent Number</label>
                    <h3><?php echo $current['permanent_number']; ?></h3>
                </div>
                <div class="group">
                    <label>Date of Birth</label>
                    <h3><?php echo $current['date_of_birth']; ?></h3>
                </div>
                <div class="group">
                    <label>Nationality</label>
                    <h3><?php echo $current['nationality_country_id']; ?></h3>
                </div>
                <div class="group">
                    <label>Abbreviation</label>
                    <h3><?php echo $current['abbreviation']; ?></h3>
                </div>
            </div>

            <!-- Career stats -->
            <div class="textItems">
                <div class="group">
                    <label>Total Race Wins</label>
                    <h3><?php echo $current['total_race_wins']; ?></h3>
                </div>
                <div class="group">
                    <label>Total Championship Wins</label>
                    <h3><?php echo $current['total_championship_wins']; ?></h3>
                </div>
                <div class="group">
                    <label>Fastest Laps</label>
                    <h3><?php echo $current['total_fastest_laps']; ?></h3>
                </div>
                <div class="group">
                    <label>Total Podiums</label>
                    <h3><?php echo $current['total_podiums']; ?></h3>
                </div>
            </div>
        </div>
    </div>

    <?php include "Footer.php"; ?>
</body>

</html>
