<?php session_start();
/*$users = [
    "joe" => "123456",
    "jon" => "123456"
];*/


$json = file_get_contents('user.json');
$json_data = json_decode($json, true);
          

if (isset($_POST['username']) && !isset($_SESSION['username'])) {
   
    foreach($json_data as $student){
        
            //var_dump($student["gebruikersnaam"]);
            //echo "volgende item";
            if($_POST['username'] == $student["gebruikersnaam"]){
               //var_dump($_POST['username']);
               //var_dump($student['gebruikersnaam']);

                
                if($_POST['password'] == $student["wachtwoord"]){
                    //var_dump($_POST['password']);
               //var_dump($student["wachtwoord"]);

                    
                    $_SESSION['username'] = $_POST['username'];

                }
                            //var_dump($_SESSION['username']);
                
            }
}
       // exit;
     



  /*  if ($users[$_POST['username']] == $_POST['password']) {
        $_SESSION['username'] = $_POST['username'];
    }
    if (!isset($_SESSION['username'])) { $failed = true;} */
}

if (isset($_SESSION['username'])) {
    header("Location: ../../index.php");
    exit();
}