<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="css/global.css">
<link rel="stylesheet" href="css/account.css">

<title>F1DB-My Profile</title>
</head>

<body>
    <?php include "Header.php"; ?>

    <main class="main-container">
        <h1>My Account</h1>
        <h2><?php echo "Email: " . $_SESSION['user_email']; ?></h2>
        <h2><?php echo "My Team: " . $_SESSION['user_team']; ?></h2>

        <button class="changeButton">Change Password</button>
        <div style="display: flex; flex-direction: row; gap: 1rem;">
            <label for="teamSelector">Change Teams:</label>
            <select name="teamSelection" id="teamSelector">
                <option value="McLaren">McLaren</option>
                <option value="RedBull">RedBull</option>
                <option value="Ferrari">Ferrari</option>
                <option value="Mercedes">Mercedes</option>
                <option value="Haas">Haas</option>
                <option value="Sauber">Sauber</option>
                <option value="Alpine">Alpine</option>
                <option value="Williams">Williams</option>
                <option value="RacingBulls">Racing Bulls</option>
                <option value="AstonMartin">Aston Martin</option>
                <option selected value="None">None</option>
            </select>
        </div>
        <a href="logout.php" id="logoutBtn" class="changeButton">Logout</a>
    </main>
    <script>
        const $teamSelector = document.getElementById('teamSelector');

        // Map of F1 teams to their main colors and hover colors
        const f1Colors = {
            "McLaren": { main: "#FF5800", hover: "#FF7500" },
            "Ferrari": { main: "#FF2800", hover: "#FF4040" },
            "RedBull": { main: "#1E41FF", hover: "#405BFF" },
            "Mercedes": { main: "#00D2BE", hover: "#33E0C9" },
            "Haas": { main: "#B6BABD", hover: "#D0D3D5" },
            "Sauber": { main: "#A0A0A0", hover: "#C0C0C0" },
            "Alpine": { main: "#ef90e0", hover: "#d38ac8ff" },
            "Williams": { main: "#37BEDD", hover: "#5FD3EE" },
            "RacingBulls": { main: "#AA0000", hover: "#CC3333" },
            "AstonMartin": { main: "#006F62", hover: "#009D85" },
            "Sauber": { main: "#00ff2f", hover: "#21c23fff" },
            "None": { main: "#e10600", hover: "#b30000" }
        };
        function setF1Theme(team) {
            const color = f1Colors[team];
            if (!color) return;

            document.documentElement.style.setProperty('--f1-main', color.main);
            document.documentElement.style.setProperty('--f1-hover', color.hover);

            // Save selection in localStorage so other pages can use it
            localStorage.setItem('f1SelectedTeam', team);
        }

        // On page load, apply saved theme if exists
        document.addEventListener('DOMContentLoaded', () => {
            const savedTeam = localStorage.getItem('f1SelectedTeam');
            if (savedTeam && f1Colors[savedTeam]) {
                setF1Theme(savedTeam);
                const teamSelector = document.getElementById('teamSelector');
                if (teamSelector) teamSelector.value = savedTeam;
            }
        });

        // Listen for dropdown changes
        const teamSelector = document.getElementById('teamSelector');
        if (teamSelector) {
            teamSelector.addEventListener('change', (e) => {
                setF1Theme(e.target.value);
            });
        }

    </script>
    <?php include "Footer.php"; ?>
</body>

</html>