<!DOCTYPE html>
<html lang="en">
<>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/account.css">
    
    <title>F1DB-My Profile</title>
</head>
<body>
    <?php include "Header.php"; ?>

    <main class="main-container">
        <h1>My Account</h1>
        <h2><?php echo "Email: " . $_SESSION['user_email']; ?></h2>
        <h2><?php echo "My Team: " . $_SESSION['user_team']; ?></h2>

        <button class="changeButton">Change Password</button>
        <button class="changeButton">Change Teams</button>
        <a href="logout.php" id="logoutBtn" class="changeButton">Logout</a>
    </main>

    <?php include "Footer.php"; ?>
</body>
</html>
