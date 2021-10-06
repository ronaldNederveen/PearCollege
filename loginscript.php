        <?php 
        
        session_start();
        $users_json = file_get_contents('user.json');
        $data = json_decode($users_json, true);
        //var_dump($data);
        if (isset($_POST['Submit'])) {
           

            $gebruikersnaam = isset($_POST['email']) ? $_POST['email'] : '';
            $wachtwoord = isset($_POST['Password']) ? $_POST['Password'] : '';

            $user = findOne(array('gebruikersnaam' => 'user1', 'wachtwoord' => 'pass1'));


                if ($gebruikersnaam == 'user1' && $wachtwoord == 'pass1'){
                    header("location:index.php");
                    exit;
                } else{
                    echo "Geen geldige inlogpoging";
                }
            }

//          if (isset($gebruikersnaam) == 'user1' && isset($wachtwoord) == 'pass1') {
//                $_SESSION['UserData']['email'] = $logins[$gebruikersnaam];
  //              header("location:index.php");
    //            exit;
      //      } else {
        //        $msg = "Geen geldige inlogpoging";
          //  }
        

        ?>
   
   