              
        <?php  session_start();
    if(isset($_POST['Submit'])){
    $logins = array('AchmedJ2002' => 'Achmed1234');

    $Username = isset($_POST['AchmedJ2002']) ? $_POST['AchmedJ2002'] : '';
$Password = isset($_POST['Achmed1234']) ? $_POST['Achmed1234'] : '';

if (isset($logins[$Username]) && $logins[$Username] == $Password){
$_SESSION['UserData']['Username']=$logins[$Username];
header("location:index.php");
exit;
} else {
$msg="Geen geldige inlogpoging";
}
}
?>
   
   