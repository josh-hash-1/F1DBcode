<?php session_start(); ?>
<?php include "db_connect.php"; ?>

<?php
    $email = $_POST["userEmail"];
    $password = $_POST["userPass"];
    $teamChoice = $_POST["teamSelection"];

    $userID = $pdo->lastInsertId();

    $_SESSION["userEmail"] = $email;
    $_SESSION["userID"] = $userID;
    $_SESSION["userTeam"] = $teamChoice;

    $encPass = password_hash($password, PASSWORD_DEFAULT);

    if(empty($email)) { echo "<script>alert('Email cannot be blank.'); window.history.back();</script>"; }
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL)) 
        { echo "<script>alert('Please use valid email format.'); window.history.back();</script>"; }
    else if(empty($password)) { echo "<script>alert('Password cannot be blank.'); window.history.back();</script>"; }
    else{
        try {

            $sqlCheck = "SELECT * FROM users WHERE email = :email";

            $sqlAdd = "INSERT INTO users (email, password, userTeam)
                VALUES (:userEmail, :userPass, :teamSelection)";

            $checkStmt = $pdo->prepare($sqlCheck);

            $checkStmt->execute(["email"=> $email]);

            $checkStmt->setFetchMode(PDO::FETCH_ASSOC);

            $stmt = $pdo->prepare($sqlCheck);

            $users = $checkStmt->fetch();

            $teamNum = chooseTeam($teamChoice);

            if($users === false){

                $addStmt = $pdo->prepare($sqlAdd);

                $addStmt->execute([
                ":userEmail" => $email,
                ":userPass"=> $encPass,
                "teamSelection"=> $teamNum
                ]);
            }
            else{
                echo "<script>alert('User already exists under that email.'); window.history.back();</script>";
            }
        } catch (PDOException $e) {
            echo 'Error inserting values into database.' . $e->getMessage();
        }

        // redirect user to their dashboard
        header("Location: account.php");
        exit();
    }

    function chooseTeam($teamSelection){
        $teams = [
            "Mercedes"=> 1,
            "RedBull"=> 2,
            "Ferrari"=> 3,
            "McLaren"=> 4,
            "Alpine"=> 5,
            "AstonMartin"=> 6,
            "Haas"=> 7,
            "Williams"=> 8,
            "Sauber"=> 9,
            "RacingBalls"=> 10,
            "None"=> 11,
        ];

        foreach($teams as $key => $value){
            if($key == $teamSelection){
                return $value;
            }
        }
    }
?>