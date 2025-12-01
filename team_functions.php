<?php
// displays team stats depending on given team argument
function teamStatsButton($constructorRef) {
    $url = "team_stats.php?constructor_ref=" . urlencode($constructorRef);
    return "
        <div style='margin-top: 20px; text-align: center;'>
            <a href='{$url}' class='btn btn--primary' style='padding: 10px 24px; font-size: 18px; text-color: var(--f1-main); text-decoration: none;'>
                2025 Stats
            </a>
        </div>
    ";
}
?>
