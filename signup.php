<?php
    session_start();
    if (isset($_SESSION['userEmail'])) {
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
            <form id="signup-form" action="process_signup.php" method="POST">
            <h1>Sign Up</h1>
            <input required type="email" name="userEmail" class="input-field" placeholder="Enter your email">
            <input required type="password" name="userPass" class="input-field" placeholder="Enter your password">
            <div style="display: flex; flex-direction: row; gap: 1rem;">
                <label for="teamSelector">Choose your favorite team:</label>
                <select name="teamSelection" id="teamSelector">
                    <option value="mclaren">McLaren</option>
                    <option value="red-bull">RedBull</option>
                    <option value="ferrari">Ferrari</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="haas">Haas</option>
                    <option value="kick-sauber">Sauber</option>
                    <option value="alpine">Alpine</option>
                    <option value="williams">Williams</option>
                    <option value="racing-bulls">Racing Bulls</option>
                    <option value="aston-martin">Aston Martin</option>
                    <option selected value="None">None</option>
                </select>
            </div>
            <button type="submit" id="submitButton" >Sign-Up!</button>
        </form>
        </div>
    </div>
    <?php include "Footer.php"; ?>
</body>     
</html>