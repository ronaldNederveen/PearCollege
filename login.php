<?php
include "header.php";
?>

<body class="loginScreen">

    <div class="login">
        <div class="loginHeader">
        
            <img src="assets/img/PearCollege_logo.svg" alt="PearCollege Logo" id="loginLogo" style="float:left";>
            <div class="loginText">
            <h3>Pear College</h3>
        </div>
        </div>
        

        <div class="loginInput">
            <div class="emailField">
                <img src="assets/icons/user-solid.svg" alt="Icon user" id="LoginUserIcon">
                <input type="text" size="25" name="email" placeholder="E-mail..." id="emailInput">
            </div>
            <br>
            <div class="passwordField">
                <img src="assets/icons/lock-solid.svg" alt="Icon lock" id="LoginLockIcon">
                <input type="password" size="25" name="Password" placeholder="Password..." id="passwordInput">
            </div>
        </div>

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