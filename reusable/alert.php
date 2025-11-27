<?php
    function jsAlert($message){
        echo "<script>alert('$message'); window.history.back();</script>";
    }
?>