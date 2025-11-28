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
    <?php include "Header.php";
    include "db_connect.php";
    include "reusable/alert.php"; ?>
    <?php
    $driverName = $_GET["driver"];
    $parts = explode(" ", $driverName);
    $lowerLast = strtolower($parts[1]);

    try {
        $stmt = $pdo->prepare("SELECT * FROM `driver` WHERE name = :driverName;");
        $stmt->execute([":driverName" => $driverName]);
        $current = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        jsAlert("Error connecting to DB." . $e->getMessage());
    }

    function teamAssociate($driver)
    {

        $driversToConstructors = [
            // McLaren
            "lando norris" => "mclaren",
            "oscar piastri" => "mclaren",

            // RedBull
            "max verstappen" => "redbull",
            "yuki tsunoda" => "redbull",

            // Mercedes
            "george russell" => "mercedes",
            "kimi antonelli" => "mercedes",

            // Ferrari
            "lewis hamilton" => "ferrari",
            "charles leclerc" => "ferrari",

            // Williams
            "alexander albon" => "williams",
            "carlos sainz" => "williams",

            // Racing Bulls
            "liam lawson" => "racingbulls",
            "isack hadjar" => "racingbulls",

            // Haas
            "esteban ocon" => "haas",
            "oliver bearman" => "haas",

            // Aston Martin
            "lance stroll" => "astonmartin",
            "fernando alonso" => "astonmartin",

            // Kick Sauber
            "nico hulkenberg" => "sauber",
            "gabriel bortoleto" => "sauber",

            // Alpine
            "pierre gasly" => "alpine",
            "franco colapinto" => "alpine"
        ];


        foreach ($driversToConstructors as $key => $value) {
            if (strtolower($driver) === $key) {
                return $value;
            }
        }
        return null;
    }

    $driver_team = teamAssociate($driverName);

    ?>
    <div class="main-container">
        <div class="card">
            <div class="name-div">
                <a href="drivers_current.php">← All Drivers</a>
                <div class="inner-name-div">
                    <h1><?php echo "$parts[0]"; ?></h1>
                    <h1><?php echo "$parts[1]"; ?></h1>
                </div>
                <img id="team-logo" src="<?php echo "Images/$driver_team" . "-logo.png"; ?>" alt="Team Image">
            </div>
            <img id="driver-img" src="<?php echo "Images/$lowerLast" . "_headshot.png"; ?>" alt="Driver Image">
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
        </div>
    </div>
    <?php include "Footer.php"; ?>
</body>

</html>