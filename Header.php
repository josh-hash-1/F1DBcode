<link rel="stylesheet" href="css/header_styles.css">
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Get the current page filename
$currentPage = basename($_SERVER['PHP_SELF']);

// Exclude theme.php on specific pages
$excludeTheme = ['login.php', 'signup.php']; // pages to skip

if (!in_array($currentPage, $excludeTheme)) {
    include_once 'theme.php';
}
?>
<nav class="navbar">
    <ul class="menu">
      <img src="f1db-logo.png" height="50" width="50">
      <li><a href="index.php">Home</a></li>

      <!-- Constructors Menu -->
      <li class="dropdown">
        <a href="#">Constructors ▾</a>
        <ul class="submenu">
          <li><a href="best_all_time_team.php">Top Constructor's All Time</a></li>
          <li><a href="constructors_current.php">Current Teams</a></li>
        </ul>
      </li>

      <!-- Drivers Menu -->
      <li class="dropdown">
        <a href="#">Drivers ▾</a>
        <ul class="submenu">
          <li><a href="drivers_current.php">Current Drivers</a></li>
          <li><a href="best_all_time_driver.php">Top Driver's of All Time</a></li>
        </ul>
      </li>
      <!-- Races Menu -->
      <li class="dropdown">
        <a href="#">Races ▾</a>
        <ul class="submenu">
          <li><a href="last_race.php">Last Race</a></li>
          <li><a href="upcoming_race.php">Future Races</a></li>
        </ul>
      </li>
      <li class="right"><a href="#">About Us</a></li>
      <li class="right2"><a href="signup.php">Account</a></li>
    </ul>
  </nav>