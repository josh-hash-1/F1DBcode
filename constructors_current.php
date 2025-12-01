<?php include 'team_functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current Constructors</title>
    <link rel="stylesheet" href="css/current_constructor.css">
    <link rel="stylesheet" href="css/global.css">
    <script src="javascript/script.js" defer></script>
</head>

<body>
    <?php include "Header.php"; ?>

    <h1>Current Teams</h1>
    <div class="car-box">

        <!-- McLaren -->
        <div class="mclaren">
            <h2>McLaren Mastercard</h2>
            <div class="car-box-mclaren">
                <img src="images/2025mclarencarright.png" height="320" width="auto">
            </div>
            <p>
                McLaren is a British Formula 1 team founded in 1963 by New Zealander Bruce McLaren...
            </p>
            <?php echo teamStatsButton('mclaren'); ?>
        </div>

        <!-- Ferrari -->
        <div class="ferrari">
            <h2>Ferrari</h2>
            <div class="car-box-ferrari">
                <img src="images/2025ferraricarright.png" height="320" width="auto">
            </div>
            <p>
                Scuderia Ferrari is Formula 1’s oldest and most iconic team...
            </p>
            <!-- Corrected teamStatsButton argument -->
            <?php echo teamStatsButton('ferrari'); ?>
        </div>

        <!-- Red Bull -->
        <div class="redbull">
            <h2>Oracle RedBull Racing</h2>
            <div class="car-box-redbull">
                <img src="images/2025redbullracingcarright.png" height="320" width="auto">
            </div>
            <p>
                Red Bull Racing is a championship-winning Formula 1 team...
            </p>
            <?php echo teamStatsButton('redbull'); ?>
        </div>

        <!-- Mercedes -->
        <div class="mercedes">
            <h2>Mercedes AMG Petronas</h2>
            <div class="car-box-mercedes">
                <img src="images/2025mercedescarright.png" height="320" width="auto">
            </div>
            <p>
                Mercedes-AMG Petronas is one of the most successful modern Formula 1 teams...
            </p>
            <?php echo teamStatsButton('mercedes'); ?>
        </div>

        <!-- Aston Martin -->
        <div class="aston-martin">
            <h2>Aston Martin Aramco</h2>
            <div class="car-box-aston-martin">
                <img src="images/2025astonmartincarright.png" height="320" width="auto">
            </div>
            <p>
                Aston Martin is a rising force in Formula 1...
            </p>
            <?php echo teamStatsButton('aston-martin'); ?>
        </div>

        <!-- Alpine -->
        <div class="alpine">
            <h2>Alpine BWT</h2>
            <div class="car-box-alpine">
                <img src="images/2025alpinecarright.png" height="320" width="auto">
            </div>
            <p>
                Alpine is a French Formula 1 team known for its strong racing heritage...
            </p>
            <?php echo teamStatsButton('alpine'); ?>
        </div>

        <!-- Haas -->
        <div class="haas">
            <h2>Haas MoneyGram</h2>
            <div class="car-box-haas">
                <img src="images/2025haascarright.png" height="320" width="auto">
            </div>
            <p>
                Haas F1 Team is the first American-led outfit in Formula 1’s modern era...
            </p>
            <?php echo teamStatsButton('haas'); ?>
        </div>

        <!-- Racing Bulls -->
        <div class="racing-bulls">
            <h2>Visa Cash App Racing Bulls</h2>
            <div class="car-box-racing-bulls">
                <img src="images/2025racingbullscarright.png" height="320" width="auto">
            </div>
            <p>
                Racing Bulls is Red Bull’s sister Formula 1 team...
            </p>
            <?php echo teamStatsButton('racing-bulls'); ?>
        </div>

        <!-- Williams -->
        <div class="williams">
            <h2>Atlassian Williams Racing</h2>
            <div class="car-box-williams">
                <img src="images/2025williamscarright.png" height="320" width="auto">
            </div>
            <p>
                Williams Racing is one of Formula 1’s most historic and respected teams...
            </p>
            <?php echo teamStatsButton('williams'); ?>
        </div>

        <!-- Sauber -->
        <div class="sauber">
            <h2>F1 Team Kick Stake Sauber</h2>
            <div class="car-box-sauber">
                <img src="images/2025kicksaubercarright.png" height="320" width="auto">
            </div>
            <p>
                F1 Team Kick Stake Sauber is a long-standing Formula 1 team...
            </p>
            <?php echo teamStatsButton('sauber'); ?>
        </div>

    </div> <!-- End car-box -->

    <div class="Footer">
        <!-- Footer placeholder -->
    </div>
</body>
</html>
