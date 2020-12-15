<?php
//start,destory and direct to login page
session_start();
session_destroy();
header("Location:login.php");
   
?>
