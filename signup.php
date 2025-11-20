<?php
    session_start();
    if (isset($_SESSION['user_email'])) {
    header("Location: account.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/global.css">
    <title>Sign-Up</title>
</head>
<body>
    <?php include "Header.php"; ?>
    <div class="form-container">
        <div class="main-content">
            <form id="signup-form" action="signup-processing.php" method="POST">
            <h1>Sign Up</h1>
            <input required type="text" name="userEmail" class="input-field" placeholder="Enter your email">
            <input required type="password" name="userPass" class="input-field" placeholder="Enter your password">
            <div style="display: flex; flex-direction: row; gap: 1rem;">
                <label for="teamSelector">Choose your favorite team:</label>
                <select name="teamSelection" id="teamSelector">
                    <option value="McLaren">McLaren</option>
                    <option value="RedBull">RedBull</option>
                    <option value="Ferrari">Ferrari</option>
                    <option value="Mercedes">Mercedes</option>
                    <option value="Haas">Haas</option>
                    <option value="Sauber">Sauber</option>
                    <option value="Alpine">Alpine</option>
                    <option value="Williams">Williams</option>
                    <option value="RacingBulls">Racing Bulls</option>
                    <option value="AstonMartin">Aston Martin</option>
                    <option selected value="None">None</option>
                </select>
            </div>
                <button id="submitButton" >Sign-Up!</button>
        </form>
        </div>
    </div>
    <?php include "Footer.php"; ?>
</body>     
</html>