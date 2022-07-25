<?php
  $servername = "92.53.96.243";
  $username = "cv38872_shop";
  $password = "t7g4d6Pu";
  $dbname = "cv38872_shop";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  $conn->set_charset("utf8mb4");
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>
