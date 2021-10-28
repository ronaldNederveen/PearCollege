<!-- 
* Filename      : index.php
* Project       : Operation PearWeb
* Created       : 22-09-2021
* Description   : Intranet Pear College
* Programmer('s): Jonathan Heezen, Ronald Nederveen, Serhan Gunes, Jaafar Jawadi, Nikita Hoogeveen, Gijs Bleeker, Sarah Vogelzang & Joris Hummel
*
-->
<?php 
session_start();

include "isLogedIn.php";
include "header.php";
include "head.php";
include "hero.php";
include "applications.php";
include "workbystudents.php";
require "rssFeed.php";

include "popups.php";
include "Foot.php";

?>
