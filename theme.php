<?php
// F1 team main colors
function getF1TeamColor($team) {
    $colors = [
        "McLaren" => "#FF5800",
        "Ferrari" => "#FF2800",
        "RedBull" => "#1E41FF",
        "Mercedes" => "#00D2BE",
        "Haas" => "#B6BABD",
        "Alpine" => "#ef90e0",
        "AlphaTauri" => "#2B4562",
        "Williams" => "#37BEDD",
        "AstonMartin" => "#006F62",
        "Sauber"=> "#00ff2f",
        "None" => "#e10600"
    ];
    return $colors[$team] ?? "#e10600";
}

// F1 team hover colors (slightly darker shade or complementary)
function getF1TeamHoverColor($team) {
    $hoverColors = [
        "McLaren" => "#CC4600",
        "Ferrari" => "#CC2000",
        "RedBull" => "#152FCB",
        "Mercedes" => "#00A899",
        "Haas" => "#989C9F",
        "Alpine" => "#ef90e0",
        "AlphaTauri" => "#213A52",
        "Williams" => "#2EA0BB",
        "AstonMartin" => "#00554F",
        "Sauber"=> "#21c23fff",
        "None" => "#B30000"
    ];
    return $hoverColors[$team] ?? "#B30000";
}

// Get user team from session
$userTeam = $_SESSION['user_team'] ?? "None";
$mainColor = getF1TeamColor($userTeam);
$hoverColor = getF1TeamHoverColor($userTeam);

// Output CSS root variables
echo "<style>
:root {
    --f1-main: {$mainColor};
    --f1-hover: {$hoverColor};
}
</style>";
?>
