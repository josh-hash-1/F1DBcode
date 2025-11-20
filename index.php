<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <title>F1DB - Welcome</title>
</head>

<body>
  <?php include "Header.php"; ?>
  <!-- <div class="main" style="height: 100vh">
      <div class="intro-bg"></div>
  </div> -->
  <div class="main-container">
    <section class="hero">
      <!-- <h2>Welcome to F1DB!</h2> -->
      <img src="f1db-logo.png" alt="F1DB logo" style="width: 10rem; height: 10rem;">
      <div class="title-div">
        <p class="hero-title">Track your favorite</p>
        <p class="hero-title">teams - drivers - stats</p>
        <p class="hero-title">all in one place.</p>
      </div>
      <a href="signup.php" class="btn">Sign Up</a>
      <a href="login.php" class="btn">Log In</a>
    </section>
    <section class="features">
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
    </section>
  </div>
  <?php include "Footer.php"; ?>
</body>

</html>