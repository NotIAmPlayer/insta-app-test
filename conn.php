<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbName = "insta_app";
  $port = "4306";

  $conn = new mysqli($servername, $username, $password, $dbName, $port);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>