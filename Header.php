<style>
  /* === Base Styling === */
/* === Default colours for account with no favourite teams === */
:root {
  --f1-red: #e10600;
  --f1-dark: #0d0d0d;
  --f1-grey: #1b1b1b;
  --f1-light: #f5f5f5;
  --f1-hover: #b30000;
  --transition: all 0.3s ease;
}

body {
  margin: 0;
  background-color: var(--f1-dark);
  font-family: -apple-system, BlinkMacSystemFont, sans-serif;
  color: var(--f1-light);
}

/* === Navbar === */
.navbar {
  background-color: var(--f1-grey);
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.6);
  border-bottom: 3px solid var(--f1-red);
}

.menu {
  list-style: none;
  display: flex;
  justify-content: center;
  margin: 0;
  padding: 0;
}

.menu .right{
    margin-left: auto;
}

.menu li {
  position: relative;
}

.menu a {
  display: block;
  padding: 16px 24px;
  text-decoration: none;
  color: var(--f1-light);
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 1px;
  transition: var(--transition);
}

/* Hover effects */
.menu a:hover {
  background-color: var(--f1-red);
  color: white;
  transform: translateY(-1px);
}

/* === Submenu === */
.submenu {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  background-color: var(--f1-grey);
  border-top: 2px solid var(--f1-red);
  list-style: none;
  margin: 0;
  padding: 0;
  min-width: 200px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.6);
  z-index: 1000;
}

.submenu li a {
  padding: 12px 20px;
  font-size: 0.9rem;
  text-transform: none;
  letter-spacing: 0.5px;
}

.dropdown:hover .submenu {
  display: block;
}

/* === Optional Hover Animation === */
.dropdown:hover > a {
  background-color: var(--f1-red);
  color: #fff;
}

/* === Responsive Design === */
@media (max-width: 768px) {
  .menu {
    flex-direction: column;
    align-items: flex-start;
  }

  .submenu {
    position: relative;
    border-top: none;
    box-shadow: none;
  }

  .menu a {
    width: 100%;
    padding: 14px 20px;
  }

  .submenu li a {
    padding-left: 40px;
  }
}

</style>
<nav class="navbar">
    <ul class="menu">
      <img src="Images/f1db-logo.png" height="50" width="50">
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