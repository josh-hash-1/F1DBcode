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

<body>
    <?php include "Header.php"; ?>
    <h1 id="title" >Current Drivers</h1>
    <div class="main">
        <div class="container my-4">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                <!-- Card 1 -->
                <div class="col">
                    <div class="card" style="background-color: #1b1b1b; color: #f5f5f5;">   
                    <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title text-danger">Driver 1</h5>
                            <img src="images/f1_placeholder.jpg" alt="f1 placeholder" class="placeholder"> 
                            <p class="card-text">Info about this driver</p>
                            <a href="#" class="btn btn-danger mt-auto">More</a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col">
                    <div class="card" style="background-color: #1b1b1b; color: #f5f5f5;">
                    <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title text-danger">Driver 2</h5>
                            <img src="images/f1_placeholder.jpg" alt="f1 placeholder" class="placeholder"> 
                            <p class="card-text">Info about this driver</p>
                            <a href="#" class="btn btn-danger mt-auto">More</a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col">
                    <div class="card" style="background-color: #1b1b1b; color: #f5f5f5;">
                    <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title text-danger">Driver 3</h5>
                            <img src="images/f1_placeholder.jpg" alt="f1 placeholder" class="placeholder"> 
                            <p class="card-text">Info about this driver</p>
                            <a href="#" class="btn btn-danger mt-auto">More</a>
                        </div>
                    </div>
                </div>

                <!-- Add more cards as needed -->
            </div>
        </div>

    </div>

    </div>
    <?php include "Footer.php"; ?>
</body>

</html>