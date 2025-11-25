<!DOCTYPE html>
<html lang="en">
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
        <h2><?php echo "Email: " . $_SESSION['userEmail']; ?></h2>
        <h2><?php echo "My Team: " . $_SESSION['userTeam']; ?></h2>

        <button class="changeButton">Change Password</button>
        <div style="display: flex; flex-direction: row; gap: 1rem;">
            <label for="teamSelector">Change Teams:</label>
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
        <a href="logout.php" id="logoutBtn" class="changeButton">Logout</a>
    </main>
    <?php include "Footer.php"; ?>
</body>

</html>