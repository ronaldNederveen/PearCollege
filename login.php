<?php
include "header.php";
?>

<body class="loginScreen">
    <div class="login">
        <div class="loginHeader">
            <img src="assets/img/PearCollege_logo.svg" alt="PearCollege Logo" id="loginLogo">
        </div>
        <div class="loginText">
            <h3>Pear College</h3>
        </div>
        <div class="loginInput">

            <div class="emailField">
                <img src="assets/icons/user-solid.svg" alt="User icon" id="loginUserIcon">
                <input type="text" size="25" name="email" placeholder="E-mail..." id="emailInput">
            </div>
            <br>

            <div class="passwordField">
                <img src="assetss/icons/lock-solid.svg" alt="Lock icon" id="loginLockIcon">
                <br>
                <br>
                <input type="password" size="25" name="Password" placeholder="Password..." id="passwordInput">
            </div>
        </div>
        <div class="loginButton">
            <input type="submit" name="login">
        </div>
    </div>
</body>

</html>