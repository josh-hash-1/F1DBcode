<<<<<<< HEAD
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

    footer {
        display: flex;
        justify-content: center;
        align-items: center;
        border-top: 3px solid var(--f1-red);
    }

    div {
        display: flex;
        padding: 1rem;
        justify-content: center;
        align-items: center;
    }

    div p {
        color: var(--f1-light);
    }
</style>
<footer>
    <div><p>&copy 2025 F1DB.</p></div>
</footer>
=======
<link rel="stylesheet" href="css/footer_style.css">
<footer class="site-footer">
    <div class="footer-container">
        
        <div class="footer-section footer-branding">
            <img src="images/f1db-logo.png" height="50" width="50">
            <p>
                A Formula 1 stat website
            </p>
        </div>

        <div class="footer-section footer-links">
            <h4>Navigation</h4>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Teams</a></li>
                <li><a href="#">Drivers</a></li>
            </ul>
        </div>

        <div class="footer-section footer-contact">
            <h4>Contact</h4>
            <ul>
                <li>Email: notareal@email.com</li>
                <li>Phone: 123-456-7890</li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?></p>
    </div>
</footer>

>>>>>>> 5dc5f81f1a550f93b675a7b3849b4afe280a5f7d
