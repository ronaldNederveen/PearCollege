<?php
session_start();
$username = $_SESSION['username'];

echo "<pre>";
print_r($_POST);
echo "</pre>";
$newPassword = $_POST['nieuwWachtwoord'];


// open the file and get the content
$json = file_get_contents('user.json');

//make it an associate array
$json_data = json_decode($json, true);


foreach ($json_data as $index => $value) {
	if ($value['gebruikersnaam'] == $username) {
		$json_data[$index]['wachtwoord'] = $newPassword;
	}
}

$newData = json_encode($json_data);



//if () {
file_put_contents('user.json', $newData);

	header("Location: ../../index.php");

