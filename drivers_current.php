<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F1DB - Drivers</title>
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/current_drivers.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .placeholder {
        background-color: transparent !important;

        img {
            filter: brightness(100%);
            opacity: 1.5;
        }
    }

    .main {
        padding-top: 10rem;
        padding-bottom: 10rem;
    }
</style>
<body>
    <?php include "Header.php"; ?>
    <h1 id="title">Current Drivers</h1>
    <div class="main">
        <div class="container my-4">
            <?php include "reusable/card.php"; ?>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4" style="max-height: 80%;">
                <?php
                makeCard("Lando Norris","mclaren", "1st with 390 season points", "images/lando_norris_headshot.png","images/mclarenbg.jpg");
                makeCard("Oscar Piastri","mclaren","2nd with 366 season points", "images/oscar_piastri_headshot.png","images/mclarenbg.jpg");
                makeCard("Max Verstappen", "redbull","3rd with 341 season points", "images/max_verstappen_headshot.png","images/redbullbg.jpg");
                ?>
            </div>
        </div>

    </div>

    </div>
    <?php include "Footer.php"; ?>
</body>

</html>