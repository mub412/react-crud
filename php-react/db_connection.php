<?php
$db_conn = mysqli_connect("localhost","root","1234","react_php_crud");

// Check connection
if ($db_conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $db_conn -> connect_error;
  exit();
}
?>