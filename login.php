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
                <input type="text" size="25" name="email" placeholder="E-mail..." id="emailInput">
                <br>
                <br>
                <input type="password" size="25" name="Password" placeholder="Password..." id="passwordInput">
        </div>
        <div class="loginButton">
                <input type="submit" name="login">    
        </div>
    </div>
</body>

</html>