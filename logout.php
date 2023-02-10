<?php
session_start();
unset($_SESSION["name"]);
unset($_SESSION["user"] );
unset($_SESSION["admin"]);

session_destroy();
echo "<meta http-equiv='refresh' content='0; url=index.php'/>";
?>