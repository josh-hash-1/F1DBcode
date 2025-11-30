<?php
session_start();
include("reusable/alert.php");
include("db_connect.php");

$email = $_POST["userEmail"];

try {
    $checkQuery = "SELECT * FROM users WHERE email = :email";
    $query = "SELECT user_id, email, t.team_name FROM users JOIN f1teams t ON t.team_id = userTeam WHERE email = :email;";

    $stmt = $pdo->prepare($checkQuery);
    $stmt->execute([":email" => $email]);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $userCheck = $stmt->fetch();

    $stmt = $pdo->prepare($query);
    $stmt->execute([":email" => $email]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (password_verify($_POST["userPass"],$userCheck["password"])) {

        $_SESSION["userEmail"] = $user["email"];
        $_SESSION["userID"] = $user["user_id"];
        $_SESSION["userTeam"] = $user["team_name"];
        
        // redirect user to their dashboard
        header("Location: account.php");
        exit();
    }
    else{
        echo "<script>
        alert('One or both credentials invalid.');
        window.location.href='login.php';
        </script>";
        exit();
    }
} catch (PDOException $e) {
    echo("Error fetching data from database." . $e->getMessage());
}
?>