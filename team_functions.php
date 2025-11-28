<?php
function teamStatsButton($constructorRef) {
    $url = "team_stats.php?constructor_ref=" . urlencode($constructorRef);
    return "
        <div style='margin-top: 20px; text-align: center;'>
            <a href='{$url}' class='btn btn--primary' style='padding: 10px 24px; font-size: 18px;'>
                🏆 2025 Stats
            </a>
        </div>
    ";
}
?>
