<?php session_start(); ?>
<?php require "db_connect.php"; ?>
<?php include "reusable/alert.php"; ?>

<?php
$email = $_POST["userEmail"];
$password = $_POST["userPass"];
$teamChoice = $_POST["teamSelection"];

$encPass = password_hash($password, PASSWORD_DEFAULT);

if (empty($email)) {
    jsAlert("Email cannot be blank.");
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    jsAlert("Please use valid email format.");
} else if (empty($password)) {
    jsAlert("Password cannot be blank.");
} else {
    try {

        // statement for checking whether user exists with that email
        $sqlCheck = "SELECT * FROM users WHERE email = :email";

        // query for adding user
        $sqlAdd = "INSERT INTO users (email, password, userTeam)
                VALUES (:userEmail, :userPass, :teamSelection)";

        $checkStmt = $pdo->prepare($sqlCheck);

        $checkStmt->execute([":email" => $email]);

        $checkStmt->setFetchMode(PDO::FETCH_ASSOC);

        $users = $checkStmt->fetch();

        if ($users === false) {

            $teamNum = chooseTeam($teamChoice);

            $addStmt = $pdo->prepare($sqlAdd);

            $addStmt->execute([
                ":userEmail" => $email,
                ":userPass" => $encPass,
                ":teamSelection" => $teamNum
            ]);

            $_SESSION["userID"] = $pdo->lastInsertId();
            $_SESSION["userEmail"] = $email;
            $_SESSION["userTeam"] = $teamChoice;

            // redirect user to their dashboard
            header("Location: account.php");
            exit();
        } else {
            jsAlert("User already exists under that email.");
        }
    } catch (PDOException $e) {
        echo 'Error inserting values into database.' . $e->getMessage();
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
            return $value;
        }
    }
}
?>