<?php
    $HOST = "localhost";
    $USERNAME = "root";
    $PASSWORD = "";
    $DB_NAME = "rocket";

    $con = new mysqli($HOST, $USERNAME, $PASSWORD, $DB_NAME);

    if($con->connect_error) {
        die($con->connect_error);
    }
?>