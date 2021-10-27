<?php
include "header.php"
?>
<!--Login screen of Pear College-->
<body class="loginScreen">
    <!--Logo , Title-->
    <div class="login">
        <div class="loginHeader">    
            <img src="assets/img/PearCollege_logo.svg" alt="PearCollege Logo" id="loginLogo" style="float:left">
            <div class="loginText">
                <h3>Pear College</h3>
            </div>
        </div>
        
        <!-- E-mail-->
        <form action="./assets/inc/changePassword.php" method="post">
            <div class="loginInput">
                <br>               

            <!-- Password-->
                <div class="passwordField">
                    <img src="assets/icons/lock-solid.svg" alt="Icon lock" id="LoginLockIcon">
                    <input type="password" size="25" name="nieuwWachtwoord" placeholder="new password..." id="passwordInput" required>
                </div>
            </div>

            <!--[LOGIN] button -->
            <div class="loginButton">
                <input type="submit" name="login" value="CHANGE PASSWORD">
            </div>
        </form>
    </div>

</body>

</html>