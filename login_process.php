<?php

include("reusable/alert.php");

$email = $_POST["userEmail"];
$encPass = password_hash($_POST["userPass"], PASSWORD_DEFAULT);

try {
    $query = "SELECT * from users WHERE email = :email";

    $stmt = $pdo->prepare($query);
    $stmt->execute([":email" => $email]);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $user = $stmt->fetch();

    if ($user["password"] == $encPass) {
        $_SESSION["userEmail"] = $user["email"];
        $_SESSION["userID"] = $user["user_id"];
        $_SESSION["userTeam"] = $user[""];
    }
} catch (PDOException $e) {
    jsAlert("Error fetching data from database.");
}
?>