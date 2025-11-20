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
            <h1>Login</h1>
            <input required type="text" name="userEmail" class="input-field" placeholder="Enter your email">
            <input required type="password" name="userPass" class="input-field" placeholder="Enter your password">
            <button id="submitButton" >Login</button>
        </form>
        </div>
    </div>
    <?php include "Footer.php"; ?>
</body>     
</html>