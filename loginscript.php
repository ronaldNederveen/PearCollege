        <?php 
        
        session_start();
        $users_json = file_get_contents('user.json');
        $data = json_decode($users_json, true);
        //var_dump($data);
        if (isset($_POST['Submit'])) {
           
            //$logins = array('username' => 'Password');

            $gebruikersnaam = isset($_POST['username']) ? $_POST['username'] : '';
            $wachtwoord = isset($_POST['Password']) ? $_POST['Password'] : '';

            $user = findOne(array('gebruikersnaam' => 'user1', 'wachtwoord' => 'pass1'));


                if ($gebruikersnaam == 'user1' && $wachtwoord == 'pass1'){
                    header("location:index.php");
                    exit;
                } else{
                    echo "Geen geldige inlogpoging";
                }
            if (isset($logins[$gebruikersnaam]) && $logins[$gebruikersnaam] == $wachtwoord) {
                $_SESSION['UserData']['username'] = $logins[$gebruikersnaam];
                header("location:index.php");
                exit;
            } else {
                $msg = "Geen geldige inlogpoging";
            }
          }

        ?>
   
   