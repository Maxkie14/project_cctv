<?php

session_start();
require_once("connection.php");

$user = $_POST["user"];
$password = $_POST["password"];
$passwordmd5 = md5($password);

$sql_login = "SELECT * FROM users WHERE user = '" . trim($user) . "' and password = '" . trim($passwordmd5) . "'";
// echo $sql_login
// $objQuer คือการทำงานช่้ำ
$objQuery = mysqli_query($conn, $sql_login);

$Result = mysqli_fetch_array($objQuery);

if (!$Result) {
    echo "ไมมี ชื่อตรงกับบฐานข้อมูล";
} else {
    echo "มีชื่อตรงกับบฐานข้อมูล";

    $position_status = $Result["position"];

    if ($position_status == "2") {

        // echo "เป็น user";
        $_SESSION["name"] = $Result["name"];
        $_SESSION["user"] = "useronline";
        echo "<meta http-equiv='refresh' content='0;url=home_user.php'>";

    } else if ($position_status == "1") {
        
        // echo "เป็น admin";
         $_SESSION["name"] = $Result["name"];
         $_SESSION["admin"] = "admin";
        echo "<meta http-equiv='refresh' content='0;url=home_admin.php'>";

    } else {
        echo "error";
    }
}


//  echo $user,$password;


// $sql = "INSERT INTO users (name, address, phone_number, user, password)
// VALUES ('$name', '$address', '$phone_number', '$user', '$passwordmd5')";

// if (mysqli_query($conn, $sql)) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

// mysqli_close($conn);