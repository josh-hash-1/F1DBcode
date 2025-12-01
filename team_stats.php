<?php
require 'db_connect.php'; // Include your PDO database connection

// Get the constructor reference from the query string
$constructorRef = $_GET['constructor_ref'] ?? '';
$currentYear = 2025;

// Stop execution if no team is selected
if (!$constructorRef) {
    die('No team selected.');
}

// Prepare query to get the constructor's 2025 season stats
$stmt = $pdo->prepare("
    SELECT 
        c.name AS team_name,
        c.country_id,
        cs.position_display_order,
        cs.points AS season_points,
        cs.points,
        COUNT(DISTINCT cs.constructor_id) AS races,
        ROUND(AVG(cs.position_display_order), 1) AS avg_position
    FROM season_constructor_standing cs
    JOIN constructor c ON c.id = cs.constructor_id
    JOIN race r ON r.id = cs.constructor_id
    WHERE r.year = :currentYear AND c.name = :constructorRef
    GROUP BY c.id;
");

// Execute the query with parameters
$stmt->execute([":constructorRef" => $constructorRef, ":currentYear"=> $currentYear]);

// Fetch stats as an associative array
$stats = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo htmlspecialchars($stats['team_name'] ?? $constructorRef); ?> 2025 Stats</title>
    <link rel="stylesheet" href="css/global.css">
</head>
<body>
    <div class="container">
        <h1><?php echo htmlspecialchars($stats['full_name'] ?? $constructorRef); ?> - 2025 Season</h1>

        <?php if ($stats): ?>
        <div class="card">
            <div class="flex gap-16">
                <!-- Current Position -->
                <div class="stat-box">
                    <h3><?php echo (int)($stats['position'] ?? 0); ?>th</h3>
                    <p>Current Position</p>
                </div>
                <!-- Season Points -->
                <div class="stat-box">
                    <h3><?php echo (int)($stats['season_points'] ?? 0); ?></h3>
                    <p>Points</p>
                </div>
                <!-- Wins -->
                <div class="stat-box">
                    <h3><?php echo (int)($stats['wins'] ?? 0); ?></h3>
                    <p>Wins</p>
                </div>
                <!-- Races Completed -->
                <div class="stat-box">
                    <h3><?php echo (int)($stats['races'] ?? 0); ?>/24</h3>
                    <p>Races</p>
                </div>
            </div>
        </div>
        <?php else: ?>
            <!-- Fallback if no data exists for this team -->
            <p>No 2025 data yet for this team.</p>
        <?php endif; ?>

        <!-- Back link -->
        <a href="constructors_current.php" class="btn btn--secondary">← Back to Teams</a>
    </div>
</body>
</html>
