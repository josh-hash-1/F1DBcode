<?php
session_start();
include("db_connect.php");
include("reusable/alert.php");

if (isset($_POST['teamSelection'])) {
    $newTeam = $_POST['teamSelection'];
    $userID = $_SESSION['userID'];

    try {
        $stmt = $pdo->prepare("UPDATE users SET team_id =
        (SELECT team_id FROM teams WHERE team_name = :teamName)
        WHERE user_id = :userID");
        $stmt->execute([
            ':teamName' => $newTeam,
            ':userID' => $userID
        ]);
    }
    catch (PDOException $e) {
        jsAlert('Error updating database.');
    }

    $_SESSION['userTeam'] = $newTeam;
}
?>

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
        <form style="display: flex; flex-direction: row; gap: 1rem;" method="POST" id="teamForm">
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
            <button type="submit" class="changeButton">Confirm Change</button>
        </form>
        <a href="logout.php" id="logoutBtn" class="changeButton">Logout</a>
    </main>
    <?php include "Footer.php"; ?>
</body>

</html>