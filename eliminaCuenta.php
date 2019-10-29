<?php
session_start();
include_once("funciones.php");
borrarRegistro($_SESSION["userEmail"]);
header("location:cerrar.php")
 ?>
