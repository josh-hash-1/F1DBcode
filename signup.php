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
    <title>Sign-Up</title>
</head>
<body>
    <?php include "Header.php"; ?>
    <div class="form-container">
        <form id="signup-form" action="signup-processing.php" method="POST">
            <h1>Sign Up</h1>
            <input required type="text" name="userEmail" class="input-field" placeholder="Enter your email">
            <input required type="password" name="userPass" class="input-field" placeholder="Enter your password">
            <div style="display: flex; flex-direction: row; gap: 1rem;">
                <label for="teamSelector">Choose your favorite team:</label>
                <select name="teamSelection" id="teamSelector">
                    <option value="mclaren">McLaren</option>
                    <option value="redbull">RedBull</option>
                    <option value="ferrari">Ferrari</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="haas">HAAS</option>
                    <option value="sauber">SAUBER</option>
                    <option value="alpine">Alpine</option>
                    <option value="williams">Williams</option>
                    <option value="racingbulls">Racing Bulls</option>
                    <option value="astonmartin">Aston Martin</option>
                    <option selected value="default">None</option>
                </select>
            </div>
                <button id="submitButton" >Sign-Up!</button>
        </form>
    </div>
</body>     
</html>