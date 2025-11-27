<link rel="stylesheet" href="css/footer_style.css">
<footer>
    <div class="footer-bar">
        <ul class="options">
            <li><a href="about.php">About Us</a></li>
            <li><a href="index.php">Home</a></li>
            <?php if(!isset($_SESSION['userEmail'])) { echo "<li><a href='login.php'>Login</a></li>"; } ?>
            <?php if(isset($_SESSION['userEmail'])) { echo "<li><a href='logout.php'>Logout</a></li>"; } ?>
        </ul>
    </div>
</footer>
