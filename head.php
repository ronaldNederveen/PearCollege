 <?php
  include "header.php";
 ?>
 <!--Header of Pear College-->
    <header>
        <!--logo part -->
        <div class="logo">
            <img src="assets/img/PearCollege_logo.svg"    alt="logo_Pear" class="logo-head">
            <p class="title-head">Pear College</p>
        </div>
        <!--search bar part -->
        <div class="search">
            <img src="assets/icons/search-solid.svg"     alt="search"    class="search-head">
                <form>
                    <input type="text" id="searchbar" name="searchbar">
                </form>
        </div>
        <!--icons part-->
        <div class="icons">
            <div class="Icontext-btn">
                <img src="assets/icons/united-kingdom.svg"   alt="UK"        class="UK-head">
                <p class=translate-head>English</p> 
            </div>
            <i class="btn fas fa-bell" id="popupBell" onclick="toggleNotificationsPopup()"></i>
            <i class="btn fas fa-user" id="popupUser" onclick="toggleUserPopup()"></i>
        </div>    
    </header> 
 
 