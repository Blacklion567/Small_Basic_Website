<?php

$conn = new mysqli("localhost", "root", "", "brylecutiee");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
