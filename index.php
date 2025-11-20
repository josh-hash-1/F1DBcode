<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/global.css">
  <link rel="stylesheet" href="css/index.css">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <title>F1DB - Welcome</title>
</head>

<body>
  <?php include "Header.php"; ?>

  <div class="main-container">
    <section class="hero">
      <img src="f1db-logo.png" alt="F1DB logo" style="width: 10rem; height: 10rem;">
      <div class="title-div">
        <p class="hero-title">Track your favorite</p>
        <p class="hero-title">teams - drivers - stats</p>
        <p class="hero-title">all in one place.</p>
      </div>
      <?php
        if(!isset($_SESSION['user_email'])){
          echo "<a href='signup.php' class='btn'>Sign Up</a>";
          echo "<a href='login.php' class='btn'>Log In</a>";
        }
      ?>
    </section>
    <div class="features">
      <a href="drivers_current.php" class="feature">
        <h3>Drivers</h3>
        <p>Explore driver profiles and stats.</p>
      </a>
      <a href="constructors_current.php" class="feature">
        <h3>Teams</h3>
        <p>Track team performance over seasons.</p>
      </a>
      <a href="#" class="feature">
        <h3>Standings</h3>
        <p>Stay up-to-date with current race standings.</p>
      </a>
    </div>
  </div>
  <?php include "Footer.php"; ?>
</body>

</html>