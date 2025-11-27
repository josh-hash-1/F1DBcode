<?php
session_start();
include("db_connect.php");
include("reusable/alert.php");

if(!isset($_SESSION["userEmail"])){
    header("Location: signup.php");
    exit();
}

if (isset($_POST['teamSelection'])) {
    $newTeam = $_POST['teamSelection'];
    $userID = $_SESSION['userID'];

    try {
        //jsAlert("ID: $userID team: $newTeam");
        $_SESSION['userTeam'] = $newTeam;
        $stmt = $pdo->prepare("UPDATE users SET userTeam = :teamName
        WHERE user_id = :userID");
        $stmt->execute([
            ':teamName' => chooseTeam($newTeam),
            ':userID' => $userID
        ]);
    }
    catch (PDOException $e) {
        jsAlert('Error updating database.' . $e->getMessage());
    }
}

function chooseTeam($teamSelection)
{
    $teams = [
        "Mercedes" => 1,
        "RedBull" => 2,
        "Ferrari" => 3,
        "McLaren" => 4,
        "Alpine" => 5,
        "AstonMartin" => 6,
        "Haas" => 7,
        "Williams" => 8,
        "Sauber" => 9,
        "RacingBalls" => 10,
        "None" => 11,
    ];

    foreach ($teams as $key => $value) {
        if ($key == $teamSelection) {
            return $value ?? null;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="css/global.css">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/account.css">

<title>F1DB-My Profile</title>
</head>

<body>
    <?php include "Header.php"; ?>

    <div class="main-container">
        <h1 class="userDetail" >My Account</h1>
        <h2 class="userDetail"><?php echo "Email: " . $_SESSION['userEmail']; ?></h2>
        <h2 class="userDetail"><?php echo "My Team: " . $_SESSION['userTeam']; ?></h2>

        <button class="changeButton">Change Password</button>
        <form style="display: flex; flex-direction: row; gap: 1rem;" method="POST" id="teamForm">
            <!-- <label for="teamSelector">Change Teams:</label> -->
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
                <option selected value="None">None</option>
            </select>
            <button type="submit" class="changeButton">Change Teams</button>
        </form>
        <a href="logout.php" id="logoutBtn" class="changeButton">Logout</a>
    </div>
    <?php include "Footer.php"; ?>
</body>
</html>