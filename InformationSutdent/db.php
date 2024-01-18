<?php

$conn = new mysqli("localhost", "root", "", "ian");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
