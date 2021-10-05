              
        <?php  session_start();
    if(isset($_POST['Submit'])){
    $logins = array('AchmedJ2002' => 'Achmed1234');

    $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';

if (isset($logins[$Username]) && $logins[$Username] == $Password){
$_SESSION['UserData']['Username']=$logins[$Username];
header("location:index.php");
exit;
} else {
$msg="Geen geldige inlogpoging";
}
}
?>
   
   