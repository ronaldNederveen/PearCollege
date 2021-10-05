<?php
include "header.php";
?>
<!--Login screen of Pear Collage-->
<body class="loginScreen">
    <!--Logo , Title-->
    <div class="login">
        <div class="loginHeader">
        
            <img src="assets/img/PearCollege_logo.svg" alt="PearCollege Logo" id="loginLogo" style="float:left";>
            <div class="loginText">
            <h3>Pear College</h3>
        </div>
        </div>
        
        <!-- E-mail-->
        <div class="loginInput">
            <div class="emailField">
                <img src="assets/icons/user-solid.svg" alt="Icon user" id="LoginUserIcon">
                <input type="text" size="25" name="email" placeholder="E-mail..." id="emailInput">
            </div>
            <br>
            
        <!-- Password-->
            <div class="passwordField">
                <img src="assets/icons/lock-solid.svg" alt="Icon lock" id="LoginLockIcon">
                <input type="password" size="25" name="Password" placeholder="Password..." id="passwordInput">
            </div>
        </div>

        <!--[LOGIN] button -->
        <div class="loginButton">
            <input type="submit" name="login" value="LOGIN">
        </div>

                
        <?php

        $json = file_get_contents('user.json');
        $json_data = json_decode($json);
        //print_r($json_data);
        
    ?>
    
</body>

</html>