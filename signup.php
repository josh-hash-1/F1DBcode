<?php
    // Start the session to access saved user data
    session_start();

    // If the user is already logged in, redirect them to their account page
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

    <!-- Page-specific and global styling -->
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/global.css">

    <title>Sign-Up</title>
</head>
<body>
    <!-- Load reusable site header -->
    <?php include "Header.php"; ?>

    <div class="form-container">
        <div class="main-content">

            <!-- Sign-up form: posts to process_signup.php -->
            <form id="signup-form" action="process_signup.php" method="POST">

                <h1>Sign Up</h1>

                <!-- Email input -->
                <input required type="email" name="userEmail" class="input-field" placeholder="Enter your email">

                <!-- Password input -->
                <input required type="password" name="userPass" class="input-field" placeholder="Enter your password">

                <!-- Team selector dropdown -->
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
                        <option value="RacingBalls">Racing Bulls</option>
                        <option value="AstonMartin">Aston Martin</option>

                        <!-- Default choice -->
                        <option selected value="None">None</option>
                    </select>
                </div>

                <!-- Submit button -->
                <button type="submit" id="submitButton">Sign-Up!</button>
            </form>

        </div>
    </div>

    <!-- Load reusable site footer -->
    <?php include "Footer.php"; ?>
</body>     
</html>
