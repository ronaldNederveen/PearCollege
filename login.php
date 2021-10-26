<?php
include "header.php";
?>
<!--Login screen of Pear Collage-->
<body class="loginScreen">
    <!--Logo , Title-->
    <div class="login">
        <div class="loginHeader">    
            <img src="assets/img/PearCollege_logo.svg" alt="PearCollege Logo" id="loginLogo" style="float:left">
            <div class="loginText">
                <h3>Pear College</h3>
            </div>
        </div>
        
        
        <form action="./assets/inc/login.inc.php" method="post">
            <div class="loginInput">
                <!-- E-mail-->
                <div class="emailField">
                    <img src="assets/icons/user-solid.svg" alt="Icon user" id="LoginUserIcon">
                    <input type="text" size="25" name="username" placeholder="Username..." id="emailInput" required>
                </div>
                <br>               
                <!-- Password-->
                <div class="passwordField">
                    <img src="assets/icons/lock-solid.svg" alt="Icon lock" id="LoginLockIcon">
                    <input type="password" size="25" name="password" placeholder="Password..." id="passwordInput" required>
                </div>
            </div>

            <!--[LOGIN] button -->
            <div class="loginButton">
                <input type="submit" name="login" value="LOGIN">
            </div>
        </form>
    </div>

</body>

</html>