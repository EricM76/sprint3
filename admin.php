<?php
include_once('autoload.php');

if (!isset($_SESSION["adminUser"])&!isset($_SESSION["adminPass"])) {
  header("location:error.php");
}

 ?>

 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <?php include("head.php")?>
     <title>SocialTruek</title>
   </head>
       <?php include("adminHeader.php") ?>
   <body>
     <div class="p-5 d-flex justify-content-center">
       <img class="img-fluid" src="logo.png" alt="" width="600">
     </div>
   </body>
   <?php include("script.php") ?>
 </html>
