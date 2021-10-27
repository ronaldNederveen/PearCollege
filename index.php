<!-- 
* Filename      : index.php
* Subject       :
* Created       : 
* Description   :
* Programmer('s):
*
-->
<?php 
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "header.php";
include "head.php";
include "hero.php";
include "applications.php";
include "workbystudents.php";
//require "rssFeed.php";

include "popups.php";
include "Foot.php";

?>
