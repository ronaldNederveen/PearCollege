              
        <?php 
        session_start();
        $users_json = file_get_contents('user.json');
        $data = json_decode($users_json, true);
        var_dump($data);
        if (isset($_POST['Submit'])) {
            $logins = array('email' => 'Password');

            $gebruikersnaam = isset($_POST['email']) ? $_POST['email'] : '';
            $wachtwoord = isset($_POST['Password']) ? $_POST['Password'] : '';

            if (isset($logins[$gebruikersnaam]) && $logins[$gebruikersnaam] == $wachtwoord) {
                $_SESSION['UserData']['email'] = $logins[$gebruikersnaam];
                header("location:index.php");
                exit;
            } else {
                $msg = "Geen geldige inlogpoging";
            }
        }
        ?>
   
   