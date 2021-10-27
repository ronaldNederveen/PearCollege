        <!--Popup personalinfo-->
        <div class="popup_user dis" id="popupUser">
            <div class="container dis" id="container_popup_user">
                <div class="box">
                    <div class="btn cross" onclick="toggleUserPopup()">
                        <div class="line first"></div>
                        <div class="line second"></div>
                    </div>

                    <!--Popup text-->
                    <h2>Persoonlijke info</h2>
                    <div class="content">
                        <p class="type name nomargin">Naam:</p>
                        <p class="input i-name">Joris Hummel</p>
                        <p class="type id">Student ID:</p>
                        <p class="input i-id"></p>
                        
                        <!--Logout/Change password-->
                        <div class="links">
                            <a href="Rpassword.php">Wijzig wachtwoord</a>
                            <a href="login.php">Uitloggen</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Popup Notifications -->
        <div class="popup_notifications dis" id="popupNotifications">
            <div class="container">
                <div class="triangle"></div>
                <div class="top">
                    <i class="btn far fa-bell" id="popupBell"></i>
                    <h2>Notificaties</h2>
                    <div class="btn cross" onclick="toggleNotificationsPopup()">
                        <div class="line first"></div>
                        <div class="line second"></div>
                    </div>
                </div>
                <div class="center">
                    <div class="message unread">
                        <div class="profile"></div>
                        <div class="content">
                            <h3>John Doe</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vehicula ligula quam, at elementum neque ultricies quis. Etiam erat diam, lobortis sit amet interdum nec, convallis vitae erat. Phasellus bibendum nisl nec dictum tincidunt. Phasellus eget sapien nisi. Morbi tincidunt consequat felis ac euismod. Aliquam ut venenatis justo, condimentum mattis sem. In maximus, nulla eu mattis faucibus, nulla enim cursus massa, sed aliquam nisi sapien in felis.</p>
                        </div>
                        <div class="time">
                            <p>5 min geleden</p>
                        </div>
                    </div>
                    <div class="message unread">
                        <div class="profile"></div>
                        <div class="content">
                            <h3>Naam</h3>
                            <p>Bericht</p>
                        </div>
                        <div class="time">
                            <p>5 min geleden</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile"></div>
                        <div class="content">
                            <h3>Naam</h3>
                            <p>Bericht</p>
                        </div>
                        <div class="time">
                            <p>5 min geleden</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile"></div>
                        <div class="content">
                            <h3>Naam</h3>
                            <p>Bericht</p>
                        </div>
                        <div class="time">
                            <p>5 min geleden</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile"></div>
                        <div class="content">
                            <h3>Naam</h3>
                            <p>Bericht</p>
                        </div>
                        <div class="time">
                            <p>5 min geleden</p>
                        </div>
                    </div>
                </div>
                <div class="bottom">
                    <i class="far fa-comment"></i>
                    <button>Nieuw bericht</button>
                </div>
            </div>
        </div>

        <!-- Popup Read more Latest news -->
        <div class="popup_readmore_ln dis" id="popupLN">
            <div class="container">
                <div class="content">
                    <img id="pp-lnImg" src="">
                    <div class="text">
                        <h3 id="pp-lnTitle"></h3>
                        <p id="pp-lnText">Lorum Ipsum</p>
                    </div>
                </div>
                <div class="btn cross" onclick="toggleReadMore()">
                    <div class="line first"></div>
                    <div class="line second"></div>
                </div>
            </div>
        </div>