<?php
    // resume session
    session_start(); 

    // destroy current session on logout
    session_destroy();

    // redirect user back to the signup page
    header("Location: index.php");
    exit();
?>