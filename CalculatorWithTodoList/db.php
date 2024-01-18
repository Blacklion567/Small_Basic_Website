<?php

$conn = new mysqli("localhost", "root", "", "carlo");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
