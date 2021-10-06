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
if(!isset($_SESSION['UserData']['email'])){
    header("location:login.php");
    exit;
}
?>
<!-- Welcome student -->

    <div class="hero">
        <div class="intro">
            <h1>Welcome Joris</h1>
            <div class="box"></div>
            <i class="corner"></i>
            <i class="top"></i>
        </div>
        
        <!--Boxes for all news and apps -->
        <div class="news"></div>
        <div class="apps">
        </div>
    </div>  

<?php

include "popups.php";
include "foot.php";

?>
