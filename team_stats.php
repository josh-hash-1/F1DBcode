<?php
require 'db_connect.php'; // your PDO connection

$constructorRef = $_GET['constructor_ref'] ?? null ?? '';
$currentYear = 2025;

if (!$constructorRef) {
    die('No team selected.');
}

$stmt = $pdo->prepare("
    SELECT 
        c.name AS team_name,
        c.nationality,
        cs.position,
        cs.points AS season_points,
        cs.wins,
        COUNT(DISTINCT cs.raceId) AS races,
        ROUND(AVG(cs.position), 1) AS avg_position
    FROM constructor_standings cs
    JOIN constructors c ON c.constructorId = cs.constructorId
    JOIN races r ON r.raceId = cs.raceId
    WHERE r.year = ? AND c.constructorRef = ?
    GROUP BY c.constructorId
");
$stmt->execute([$currentYear, $constructorRef]);
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
                <div class="stat-box">
                    <h3><?php echo (int)($stats['position'] ?? 0); ?>th</h3>
                    <p>Current Position</p>
                </div>
                <div class="stat-box">
                    <h3><?php echo (int)($stats['season_points'] ?? 0); ?></h3>
                    <p>Points</p>
                </div>
                <div class="stat-box">
                    <h3><?php echo (int)($stats['wins'] ?? 0); ?></h3>
                    <p>Wins</p>
                </div>
                <div class="stat-box">
                    <h3><?php echo (int)($stats['races'] ?? 0); ?>/24</h3>
                    <p>Races</p>
                </div>
            </div>
        </div>
        <?php else: ?>
            <p>No 2025 data yet for this team.</p>
        <?php endif; ?>
        
        <a href="current_constructor.php" class="btn btn--secondary">← Back to Teams</a>
    </div>
</body>
</html>
