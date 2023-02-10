<?php
require_once("connection.php");

$name = $_POST["name"];
$address = $_POST["address"];
$phone_number = $_POST["phone_number"];
$user = $_POST["user"];
$password = $_POST["password"];
$passwordmd5 = md5($password);

// echo $name , $address , $phone_number , $user, md5($password);


$sql = "INSERT INTO users (name, address, phone_number, user, password)
VALUES ('$name', '$address', '$phone_number', '$user', '$passwordmd5')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
