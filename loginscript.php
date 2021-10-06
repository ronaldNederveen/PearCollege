        <?php 
        
        session_start();
        $users_json = file_get_contents('user.json');
        $data = json_decode($users_json, true);
        //var_dump($data);
        if (isset($_POST['Submit'])) {
<<<<<<< HEAD
           
=======
            $logins = array('username' => 'Password');
>>>>>>> a53283becbf6383ab8457fe4cfc4313efa2c03e2

            $gebruikersnaam = isset($_POST['username']) ? $_POST['username'] : '';
            $wachtwoord = isset($_POST['Password']) ? $_POST['Password'] : '';

<<<<<<< HEAD
            $user = findOne(array('gebruikersnaam' => 'user1', 'wachtwoord' => 'pass1'));


                if ($gebruikersnaam == 'user1' && $wachtwoord == 'pass1'){
                    header("location:index.php");
                    exit;
                } else{
                    echo "Geen geldige inlogpoging";
                }
=======
            if (isset($logins[$gebruikersnaam]) && $logins[$gebruikersnaam] == $wachtwoord) {
                $_SESSION['UserData']['username'] = $logins[$gebruikersnaam];
                header("location:index.php");
                exit;
            } else {
                $msg = "Geen geldige inlogpoging";
>>>>>>> a53283becbf6383ab8457fe4cfc4313efa2c03e2
            }

//          if (isset($gebruikersnaam) == 'user1' && isset($wachtwoord) == 'pass1') {
//                $_SESSION['UserData']['email'] = $logins[$gebruikersnaam];
  //              header("location:index.php");
    //            exit;
      //      } else {
        //        $msg = "Geen geldige inlogpoging";
          //  }
        

        ?>
   
   