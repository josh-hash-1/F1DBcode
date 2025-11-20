<?php
    session_start();

    $email = $_POST["userEmail"];
    $password = $_POST["userPass"];
    $teamChoice = $_POST["teamSelection"];

    $encpass = password_hash($password, PASSWORD_DEFAULT);

    $_SESSION["user_email"] = $email;
    $_SESSION["user_password"] = $encpass;
    $_SESSION["user_team"] = $teamChoice;

    header("Location: account.php");
    exit();
?>