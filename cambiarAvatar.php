<?php
session_start();
include_once("funciones.php");
// if (isset($_COOKIE["imgPerfil"])) {
//   setcookie("imgPerfil","",);
// }
if ($_POST) {
  if (isset($_POST["avatarD_x"])!=null) {
    cambiarAvatar($_SESSION["userEmail"],"images/avatar/perfilDesconocido.png");
  }
  if (isset($_POST["avatarH_x"])!=null) {
    cambiarAvatar($_SESSION["userEmail"],"images/avatar/perfilHombre.png");
  }
  if (isset($_POST["avatarM_x"])!=null) {
    cambiarAvatar($_SESSION["userEmail"],"images/avatar/perfilM.png");
  }
  if (isset($_POST["avatar01_x"])!=null) {
    cambiarAvatar($_SESSION["userEmail"],"images/avatar/avatar01.png");
  }
  if (isset($_POST["avatar02_x"])!=null) {
    cambiarAvatar($_SESSION["userEmail"],"images/avatar/avatar02.png");
  }
  if (isset($_POST["avatar03_x"])!=null) {
    cambiarAvatar($_SESSION["userEmail"],"images/avatar/avatar03.png");
  }
  if (isset($_POST["avatar04_x"])!=null) {
    cambiarAvatar($_SESSION["userEmail"],"images/avatar/avatar04.png");
  }
  if (isset($_POST["avatar05_x"])!=null) {
    cambiarAvatar($_SESSION["userEmail"],"images/avatar/avatar05.png");
  }
  if (isset($_POST["avatar06_x"])!=null) {
    cambiarAvatar($_SESSION["userEmail"],"images/avatar/avatar06.png");
  }
  if (isset($_POST["avatar07_x"])!=null) {
    cambiarAvatar($_SESSION["userEmail"],"images/avatar/avatar07.png");
  }
  if (isset($_POST["avatar08_x"])!=null) {
    cambiarAvatar($_SESSION["userEmail"],"images/avatar/avatar08.png");
  }
  if (isset($_POST["avatar09_x"])!=null) {
    cambiarAvatar($_SESSION["userEmail"],"images/avatar/avatar09.png");
  }
  if (isset($_POST["avatar10_x"])!=null) {
    cambiarAvatar($_SESSION["userEmail"],"images/avatar/avatar10.png");
  }
  if (isset($_POST["avatar11_x"])!=null) {
    cambiarAvatar($_SESSION["userEmail"],"images/avatar/avatar11.png");
  }
  if (isset($_POST["avatar12_x"])!=null) {
    cambiarAvatar($_SESSION["userEmail"],"images/avatar/avatar12.png");
  }
  if (isset($_POST["avatar13_x"])!=null) {
    cambiarAvatar($_SESSION["userEmail"],"images/avatar/avatar13.png");
  }
  if (isset($_POST["avatar14_x"])!=null) {
    cambiarAvatar($_SESSION["userEmail"],"images/avatar/avatar14.png");
  }
  if (isset($_POST["avatar15_x"])!=null) {
    cambiarAvatar($_SESSION["userEmail"],"images/avatar/avatar15.png");
  }
  if (isset($_POST["avatar16_x"])!=null) {
    cambiarAvatar($_SESSION["userEmail"],"images/avatar/avatar16.png");
  }
  if (isset($_POST["avatar17_x"])!=null) {
    cambiarAvatar($_SESSION["userEmail"],"images/avatar/avatar17.png");
  }
  if (isset($_POST["avatar18_x"])!=null) {
    cambiarAvatar($_SESSION["userEmail"],"images/avatar/avatar18.png");
  }
  if (isset($_POST["avatar19_x"])!=null) {
    cambiarAvatar($_SESSION["userEmail"],"images/avatar/avatar19.png");
  }
  if (isset($_POST["avatar20_x"])!=null) {
    cambiarAvatar($_SESSION["userEmail"],"images/avatar/avatar20.png");
  }
  if (isset($_POST["avatar21_x"])!=null) {
    cambiarAvatar($_SESSION["userEmail"],"images/avatar/avatar21.png");
  }
  if (isset($_POST["avatar22_x"])!=null) {
    cambiarAvatar($_SESSION["userEmail"],"images/avatar/avatar22.png");
  }
  if (isset($_POST["avatar23_x"])!=null) {
    cambiarAvatar($_SESSION["userEmail"],"images/avatar/avatar23.png");
  }
  if (isset($_POST["avatar24_x"])!=null) {
    cambiarAvatar($_SESSION["userEmail"],"images/avatar/avatar24.png");
  }
  if (isset($_POST["avatar25_x"])!=null) {
    cambiarAvatar($_SESSION["userEmail"],"images/avatar/avatar25.png");
  }
  if (isset($_POST["avatar26_x"])!=null) {
    cambiarAvatar($_SESSION["userEmail"],"images/avatar/avatar26.png");
  }
  if (isset($_POST["avatar27_x"])!=null) {
    cambiarAvatar($_SESSION["userEmail"],"images/avatar/avatar27.png");
  }
  if (isset($_POST["avatar28_x"])!=null) {
    cambiarAvatar($_SESSION["userEmail"],"images/avatar/avatar28.png");
  }
  if (isset($_POST["avatar29_x"])!=null) {
    cambiarAvatar($_SESSION["userEmail"],"images/avatar/avatar29.png");
  }
  if (isset($_POST["avatar30_x"])!=null) {
    cambiarAvatar($_SESSION["userEmail"],"images/avatar/avatar30.png");
  }
}
header("location:perfil.php");
 ?>
