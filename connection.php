<?php
$conn = new mysqli("localhost","root","","project_cctv");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}else{
    // echo"connect ok";
}
mysqli_set_charset($conn,"utf8");
date_default_timezone_set("asia/bangkok");
?>