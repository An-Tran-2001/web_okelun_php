<?php
    $mysqli = new mysqli("localhost","root","","web_okelun-lol");

    // Check connection
    if ($mysqli->connect_errno) {
    echo "Thôi lỗi rùi: " . $mysqli->connect_error;
    exit();
    }
?>