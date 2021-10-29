

<?php session_start();
//start of file and start the session

// open the file and get the content
$json = file_get_contents('../json/user.json');

//make it an associate array
$json_data = json_decode($json, true);
      
//remove any session that is still running
unset($_SESSION['naam']);
unset($_SESSION['anaam']);
unset($_SESSION['sid']);

//check if the username field has something and the session is empty. if the session isn't empty it should load the index page (see lines 45-50)
if (isset($_POST['username']) && !isset($_SESSION['naam'])) {

   //loop through the json file 
    foreach($json_data as $student){
        
           //check if the username that has been entred is the same as the username in user.json. is it true ==> do the same for passwords
            if($_POST['username'] == $student["gebruikersnaam"]){

                //validate passwords
                if($_POST['password'] == $student["wachtwoord"]){
              

                    //if the passwords are also true, set the session
                    $_SESSION['username'] = $student['gebruikersnaam'];
                    $_SESSION['naam'] = $student["voornaam"];
                    $_SESSION['anaam'] = $student["achternaam"];
                    $_SESSION['sid'] = $student["studentid"];


                   // warning and return to login.php when a wrong password has been entrerd     
                } else{
                    echo ("verkeerd wachtwoord <br>");
                    echo ("<a href=../../EN/login.php>probeer opnieuw</a>");
                }
                           
                
            }
    }
     
}

//is the seession is filled with the username
if (isset($_SESSION['naam'])) {
    //go to the index page.
    header("Location: ../../index.php");
    
    exit();
}