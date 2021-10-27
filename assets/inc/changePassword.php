<?php
session_start();
//inladen van de te gebruiken data
$username = $_SESSION['username'];
$newPassword = $_POST['nieuwWachtwoord'];


// open the file and get the content
$json = file_get_contents('user.json');

//make it an associate array
$json_data = json_decode($json, true);

//zoeken naar de record van de correcte leerling
foreach ($json_data as $index => $value) {
	if ($value['gebruikersnaam'] == $username) {
		$json_data[$index]['wachtwoord'] = $newPassword;
	}
}

//converteren van array format naar json format
$newData = json_encode($json_data);

// schrijven naar het bestand
file_put_contents('user.json', $newData);
header("Location: ../../index.php");
