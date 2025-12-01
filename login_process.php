<?php
// Start the session so we can store user info after login
session_start();

// Include reusable alert functions (optional)
include("reusable/alert.php");

// Include database connection using PDO
include("db_connect.php");

// Get the email submitted from the login form
$email = $_POST["userEmail"];

try {
    // First query: check if a user exists with the submitted email
    $checkQuery = "SELECT * FROM users WHERE email = :email";

    // Second query: get user details including the team name
    $query = "SELECT user_id, email, t.team_name 
              FROM users 
              JOIN f1teams t ON t.team_id = userTeam 
              WHERE email = :email;";

    // Prepare and execute the first query
    $stmt = $pdo->prepare($checkQuery);
    $stmt->execute([":email" => $email]);

    // Fetch associative array for the user
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $userCheck = $stmt->fetch();

    // Prepare and execute the second query to get team name
    $stmt = $pdo->prepare($query);
    $stmt->execute([":email" => $email]);

    // Fetch user details including team
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verify submitted password against the hashed password in the database
    if (password_verify($_POST["userPass"], $userCheck["password"])) {

        // Store user info in session variables for use throughout the site
        $_SESSION["userEmail"] = $user["email"];
        $_SESSION["userID"] = $user["user_id"];
        $_SESSION["userTeam"] = $user["team_name"];
        
        // Redirect the logged-in user to their account/dashboard page
        header("Location: account.php");
        exit();
    } else {
        // If password is invalid, show an alert and redirect back to login page
        echo "<script>
                alert('One or both credentials invalid.');
                window.location.href='login.php';
              </script>";
        exit();
    }

} catch (PDOException $e) {
    // Catch any database errors and display a message
    echo("Error fetching data from database: " . $e->getMessage());
}
?>
