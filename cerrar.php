<?php
session_start();
setcookie("userEmail", "",0);
setcookie("userPass","",0);
session_destroy();
setcookie("errorlogin0", "",0);
setcookie("errorlogin1", "",0);
header("location:index.php");

 ?>
