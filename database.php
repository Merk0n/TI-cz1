<?php

function checkConnection($connection, $database) {
  if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
  }
  else {
    echo "Connected successfully to $database <br>";
  }
}

?>