

<?php session_start();
//start of file and start the session

// open the file and get the content
$json = file_get_contents('user.json');

//make it an associate array
$json_data = json_decode($json, true);
          
//check if the username field has something and the session is empty. if the session isn't empty it should load the index page (see lines 38-41)
if (isset($_POST['username']) && !isset($_SESSION['username'])) {

   //loop through the json file 
    foreach($json_data as $student){
        
           //check if the username that has been entred is the same as the username in user.json. is it true ==> do the same for passwords
            if($_POST['username'] == $student["gebruikersnaam"]){
               

                //validate passwords
                if($_POST['password'] == $student["wachtwoord"]){
              

                    //if the passwords are also true, set the session
                    $_SESSION['username'] = $_POST['username'];


                   // warning and return to login.php when a wrong password has been entrerd     
                } else{
                    echo ("verkeerd wachtwoord <br>");
                    echo ("<a href=../../login.php>probeer opnieuw</a>");
                }
                           
                
            }
    }
     
}

//is the seession is filled with the username
if (isset($_SESSION['username'])) {
    //go to the index page.
    header("Location: ../../index.php");
    exit();
}