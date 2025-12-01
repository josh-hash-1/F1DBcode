<?php
// Start session to access user data
session_start();

// Include PDO database connection
include("db_connect.php");

// Include reusable alert functions (e.g., jsAlert)
include("reusable/alert.php");

// Redirect to login page if user is not logged in
if(!isset($_SESSION["userEmail"])){
    header("Location: login.php");
    exit();
}

// Check if the form to update team has been submitted
if (isset($_POST['teamSelection'])) {
    $newTeam = $_POST['teamSelection']; // Selected team from dropdown
    $userID = $_SESSION['userID'];      // Current logged-in user's ID

    try {
        // Update the session variable immediately for UI update
        $_SESSION['userTeam'] = $newTeam;

        // Prepare SQL to update the user's team in the database
        $stmt = $pdo->prepare("UPDATE users SET userTeam = :teamName
                               WHERE user_id = :userID");

        // Execute the update, converting the team name to team ID
        $stmt->execute([
            ':teamName' => chooseTeam($newTeam),
            ':userID' => $userID
        ]);
    }
    catch (PDOException $e) {
        // Show alert if database update fails
        jsAlert('Error updating database.' . $e->getMessage());
    }
}

// Helper function: maps team name from dropdown to database ID
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

    // Return the matching ID for the selected team
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

<!-- Global and page-specific styling -->
<link rel="stylesheet" href="css/global.css">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/account.css">

<title>F1DB - My Profile</title>
</head>

<body>
    <!-- Include site header -->
    <?php include "Header.php"; ?>

    <div class="main-container">
        <!-- Display user info -->
        <h1 class="userDetail">My Account</h1>
        <h2 class="userDetail"><?php echo "Email: " . $_SESSION['userEmail']; ?></h2>
        <h2 class="userDetail"><?php echo "My Team: " . $_SESSION['userTeam']; ?></h2>

        <!-- Form to change user's team -->
        <form style="display: flex; flex-direction: row; gap: 1rem;" method="POST" id="teamForm">
            <select name="teamSelection" id="teamSelector">
                <option value="McLaren">McLaren</option>
                <option value="RedBull">RedBull</option>
                <option value="Ferrari">Ferrari</option>
                <option value="Mercedes">Mercedes</option>
                <option value="Haas">Haas</option>
                <option value="KickSauber">Sauber</option>
                <option value="Alpine">Alpine</option>
                <option value="Williams">Williams</option>
                <option value="RacingBalls">Racing Bulls</option>
                <option value="AstonMartin">Aston Martin</option>
                <option selected value="None">None</option>
            </select>
            <button type="submit" class="changeButton">Change Teams</button>
        </form>

        <!-- Additional account actions -->
        <div class="inner-div">
            <button class="changeButton">Change Password</button>
            <button id="logoutBtn" class="changeButton">Logout</button>
        </div>
    </div>

    <script>
        // Logout button redirects to logout.php
        const logout = document.getElementById("logoutBtn");
        logout.addEventListener("click", () => {
            window.location.href = "logout.php";
        });
    </script>

    <!-- Include site footer -->
    <?php include "Footer.php"; ?>
</body>
</html>
