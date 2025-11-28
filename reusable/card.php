<?php
function makeCard($name, $info, $imgPath, $imgBg)
{
    echo "
        <div class='col'>
            <div class='driver'>
                <div id='card-vanity' class='card-body d-flex flex-column justify-content-between'>
                    <h5 class='card-title text-danger'>$name</h5>
                    <img style='background-image=(\"$imgBg\")' src='$imgPath' class='placeholder' alt='$name'>
                    <p class='card-text'>$info</p>
                    <a href='driver_stats.php?driver=" . urlencode($name) . "' class='btn btn-danger mt-auto'>More</a>
                </div>
            </div>
        </div>
    ";
}

function makeRaceCard($driverName, $driverPos, $driverTeam,$myTeam)
{
    $teamColor = getF1Color($driverTeam);

    if($myTeam === true) {
        echo "
        <tr>
            <td style='color: #FFF3A3;'>$driverPos</td>
            <td style='color: #FFF3A3;'>$driverName</td>
            <td><div style='width:25px; height:25px; background-color:$teamColor; border-radius:4px;'></div></td>
        </tr>
        ";
    } else {
        echo "
        <tr>
            <td>$driverPos</td>
            <td>$driverName</td>
            <td><div style='width:25px; height:25px; background-color:$teamColor; border-radius:4px;'></div></td>
        </tr>
        ";
    }
}

function getF1Color($team) {
    $colors = [
        "mclaren" => "#FF5800",
        "ferrari" => "#FF2800",
        "redbull" => "#1E41FF",
        "mercedes" => "#00D2BE",
        "haas" => "#B6BABD",
        "alpine" => "#ef90e0",
        "williams" => "#37BEDD",
        "racingbulls" => "#213A52",
        "astonmartin" => "#006F62",
        "kicksauber"=> "#00ff2f",
    ];
    return $colors[$team] ?? "#ffffffff";
}
?>