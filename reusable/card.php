<?php
function makeCard($name,$class, $info, $imgPath, $imgBg) {

    echo"
        <style>

            .$class {
                transition: background ease-in-out 0.3s;
                height: 25rem;
                width: 20rem;
            }

            .$class:hover {
                background-image: url($imgBg);
            }

        </style>
    ";

    echo "
        <div class='col'>
            <div class='$class' style='background-color: #1b1b1b; color: #f5f5f5;'>
                <div class='card-body d-flex flex-column justify-content-between'>
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