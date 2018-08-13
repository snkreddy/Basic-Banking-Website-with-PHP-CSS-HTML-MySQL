<?php

$conn = new mysqli("localhost", "root","7598", "project");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

?>
