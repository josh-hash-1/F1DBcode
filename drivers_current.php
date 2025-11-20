<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F1DB - Drivers</title>
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/current_drivers.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include "Header.php";
    include "reusable/card.php"; ?>
    <div class="main container">
        <div class="row justify-content-center g-4">
            <!-- McLaren -->
            <div class="col-md-6">
                <?php makeCard("Lando Norris", "British driver racing for McLaren with car #4", "Images\lando_norris_headshot.png", "Images\mclarenbg.jpg"); ?>
            </div>
            <div class="col-md-6">
                <?php makeCard("Oscar Piastri", "Australian driver racing for McLaren with car #81", "Images\oscar_piastri_headshot.png", "Images\mclarenbg.jpg"); ?>
            </div>
            <!-- RedBull -->
            <div class="col-md-6">
                <?php makeCard("Max Verstappen", "Dutch driver racing for RedBull Racing with car #1", "Images\max_verstappen_headshot.png", "Images\redbullbg.jpg"); ?>
            </div>
            <div class="col-md-6">
                <?php makeCard("Yuki Tsunodac", "Japanese driver racing for RedBull Racing with car #22", "Images\yuki_headshot.png", "Images\redbullbg.jpg"); ?>
            </div>
            <!-- Mercedes -->
            <div class="col-md-6">
                <?php makeCard("George Russell", "British driver racing for Mercedes Racing with car #63", "Images\george_russell_headshot.png", "Images\mercedes.jpg"); ?>
            </div>
            <div class="col-md-6">
                <?php makeCard("Kimi Antonelli", "Italian driver racing for Mercedes Racing with car #12", "Images\antonelli_headshot.png", "Images\mercedes.jpg"); ?>
            </div>
            <!-- Ferrari -->
            <div class="col-md-6">
                <?php makeCard("Lewis Hamilton", "British driver racing for Ferrari with car #44", "Images\hamilton_headshot.png", "Images\ferraribg.jpg"); ?>
            </div>
            <div class="col-md-6">
                <?php makeCard("Charles Leclerc", "French driver racing for Ferrari with car #16", "Images\leclerc_headshot.png", "Images\ferraribg.jpg"); ?>
            </div>
            <!-- Williams -->
            <div class="col-md-6">
                <?php makeCard("Alexander Albon", "Thai driver racing for Williams with car #23", "Images\albon_headshot.png", "Images\williamsbg.jpg"); ?>
            </div>
            <div class="col-md-6">
                <?php makeCard("Carlos Sainz", "Spanish driver racing for Williams with car #55", "Images\sainz_headshot.png", "Images\williamsbg.jpg"); ?>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@studio-freight/lenis@1.0.42/dist/lenis.min.js"></script>
    <script src="javascript/script.js"></script>
    <?php include "Footer.php"; ?>
</body>

</html>