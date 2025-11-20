<?php
function makeCard($name, $info, $imgPath, $imgBg) {
    echo "
        <div class='col'>
            <div class='driver' style='background-image: url(\"$imgBg\")'>
                <div id='card-vanity' class='card-body d-flex flex-column justify-content-between'>
                    <h5 class='card-title text-danger'>$name</h5>
                    <img src='$imgPath' class='placeholder' alt='$name'>
                    <p class='card-text'>$info</p>
                    <a href='#' class='btn btn-danger mt-auto'>More</a>
                </div>
            </div>
        </div>
    ";
}
?>
