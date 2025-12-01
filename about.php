<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/about_us.css">
    <title>About Us Page</title>
</head>
<body>
    <?php include "Header.php" ?>
    <div class="about-us-container">
        <div class="card-main">
            <div class="title">
                <h1>About Us</h1>
            </div>

             <div class="body-text">
                <h2>Disclaimer</h2>
                <p>
                    This page isn't so much for an about us section but more for a delivery checklist for what we completed
                    throughtout the project.
                </p>
            </div>

            <div class="body-text">
                <h2>Front End Components</h2>
                <p>
                    Every page was created with clean, standards-enforced HTML, using semantic elements and meaningful tags, resulting in a well structured, responsive layout. 
                    The visual theme is maintained across pages through the careful placement of content blocks, imagery, and card-style components, creating a polished, professional look. 
                    It combines Bootstrap's global layout system with custom CSS to create a responsive, user-friendly experience. 
                    The flow on every page is smooth across devices and screen sizes, allowing seamless transitions and consistent usability across desktops, tablets, and mobile devices. 
                    Interactive elements include user input forms, buttons, and navigation features, with purposeful animations to reinforce overall usability. 
                    Tied with subtile animations to support the design without distracting from the base content of the page, creating an design that feels modern and engaging.
                </p>
                <ul>
                    <li>All HTML files are valid and semantic</li>
                    <li>CSS is organized and responsive</li>
                    <li>Bootstrap is properly implemented</li>
                </ul>
            </div>

            <div class="body-text">
                <h2>Back End Components</h2>
                <p> 
                    Website follows base PHP standards, following basic syntax and coding practices. All files, variables, containers, and more use consistent, logical naming conventions for easy use. 
                    Functions have smart, necessary parameters and return statements. Includes are used with all inputs, and functions have active error handling. 
                    MySQL is used as a base for the majority of the program's features, with PDOs for connections, prepared statements, and more used to prevent common vulnerabilities. 
                    All CRUD operations are included for account usage. Where needed, session and user authentication are used with proper form validation. 
                    The website uses POST with smart and efficient query strings.
                </p>
                <ul>
                    <li>All CRUD operations work correctly</li>
                    <li>Login/logout system functions properly</li>
                    <li>Database includes at least 2 related tables</li>
                    <li>Database creation SQL script is included</li>
                </ul>
            </div>

            <div class="body-text">
                <h2>Misc. Components</h2>
                <p> 
                    Member Names: Spencer Scarlett 041151395, Josh Hash 041147440, Jacob Dawes 041169788
                    Files contain smart and valuable comments. Naming conventions are consistent, proper folder and file structure and design, and separations where needed. 
                    DRY is followed when able. The README contains proper information.
                </p>
            </div>
        </div>
    </div>

    <?php include "Footer.php" ?>
</body>
</html>