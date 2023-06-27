<?php
date_default_timezone_set('Africa/Nairobi');
include "db.php";

function test_input($data, $connection)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);

  $data = mysqli_real_escape_string($connection, $data);
  
  // return preg_replace('/[^A-Za-z0-9\-]/', '', $data); // Removes special chars. 
  return $data;
}
?>