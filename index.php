<!-- 
* Filename      : index.php
* Subject       :
* Created       : 
* Description   :
* Programmer('s):
*
-->
<?php session_start();

include "header.php";
include "head.php";
//  if(!isset($_SESSION['username'])){
//     header("location:login.php");
//     exit;
// } 
include "hero.php";
include "applications.php";
include "workbystudents.php";

include "popups.php";
include "foot.php";

?>
