<?php
  session_start();
 require_once("connection.php");

 $strSQLlogin = "SELECT * FROM admin WHERE ad_ENG = '".trim($_POST['username'])."' and ad_id = '".trim($_POST['password'])."'";
 $objQuerylogin = mysqli_query($con,$strSQLlogin);
 $objResultlogin = mysqli_fetch_array($objQuerylogin);
 if(!$objResultlogin)
 {
     
    $strSQLlogin = "SELECT * FROM employee WHERE emp_ENG = '".trim($_POST['username'])."' and emp_id = '".trim($_POST['password'])."' and emp_level = 'it2'";
    $objQuerylogin = mysqli_query($con,$strSQLlogin);
    $objResultlogin = mysqli_fetch_array($objQuerylogin);
    if(!$objResultlogin)
    {
         
       $strSQLlogin = "SELECT * FROM employee WHERE emp_ENG = '".trim($_POST['username'])."' and emp_id = '".trim($_POST['password'])."' and emp_level = 'ac2'";
       $objQuerylogin = mysqli_query($con,$strSQLlogin);
       $objResultlogin = mysqli_fetch_array($objQuerylogin);
       if(!$objResultlogin)
       {
          $strSQLlogin = "SELECT * FROM employee WHERE emp_ENG = '".trim($_POST['username'])."' and emp_id = '".trim($_POST['password'])."' and emp_level = 'fn2'";
          $objQuerylogin = mysqli_query($con,$strSQLlogin);
          $objResultlogin = mysqli_fetch_array($objQuerylogin);
          if(!$objResultlogin)
           {
              $strSQLlogin = "SELECT * FROM employee WHERE emp_ENG = '".trim($_POST['username'])."' and emp_id = '".trim($_POST['password'])."' and emp_level = 'hr2'";
              $objQuerylogin = mysqli_query($con,$strSQLlogin);
              $objResultlogin = mysqli_fetch_array($objQuerylogin);
              if(!$objResultlogin)
              {
               ?>
<script>
Swal.fire({
    position: 'center',
    icon: 'error',
    title: 'เกิดข้อผิดพลาด! </br>กรุณาตรวจสอบรหัสหรือชื่อ',
    showConfirmButton: false,
    timer: 1700
})

err
</script>
<?php
                echo "<meta http-equiv='refresh' content='1.8; url=index.php' />";
               
              }
              else
              {
                $_SESSION["UserID"] = $objResultlogin["emp_id"];
                $_SESSION["UserName"] = $objResultlogin["emp_ENG"];
                $_SESSION["UserDep"] = $objResultlogin["emp_cou"];
                $_SESSION["Status"] = "hr";
                echo "<meta http-equiv='refresh' content='0;url=user_hr.php'>";
              }
           
          }
          else
          {
            $_SESSION["UserID"] = $objResultlogin["emp_id"];
            $_SESSION["UserName"] = $objResultlogin["emp_ENG"];
            $_SESSION["UserDep"] = $objResultlogin["emp_cou"];
            $_SESSION["Status"] = "fn";
            echo "<meta http-equiv='refresh' content='0;url=user_fn.php'>";
          }

       }
       else
       {
         $_SESSION["UserID"] = $objResultlogin["emp_id"];
         $_SESSION["UserName"] = $objResultlogin["emp_ENG"];
         $_SESSION["UserDep"] = $objResultlogin["emp_cou"];
         $_SESSION["Status"] = "ac";
         echo "<meta http-equiv='refresh' content='0;url=user_ac.php'>";
       }

    }
    else
    {
      $_SESSION["UserID"] = $objResultlogin["emp_id"];
      $_SESSION["UserName"] = $objResultlogin["emp_ENG"];
      $_SESSION["UserDep"] = $objResultlogin["emp_cou"];
      $_SESSION["Status"] = "it";
      echo "<meta http-equiv='refresh' content='0;url=user.php'>";
    }
 }
 else
 {
   $_SESSION["AdminID"] = $objResultlogin["ad_id"];
   $_SESSION["AdminName"] = $objResultlogin["ad_ENG"];
   $_SESSION["Status"] ="admin";
   echo "<meta http-equiv='refresh' content='0;url=admin.php'>";
 }


?>