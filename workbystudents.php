<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<?php
include "header.php";
?>


<?php

// inladen van JSON bestand
$projects = file_get_contents("workByStudents.json");

//JSON data converteren naar een PHP Array
$projects = json_decode($projects, true);


echo "<h1>Works made by students</h1>";
echo "<div class=\"a\">";

//Loop door alle JSON objecten / verschillende projecten
foreach ($projects as $project) {
    StudentWork($project);
    echo "</br>";
}

echo "</div>";
echo "</div>";


//functie voor het printen van een blok met informatie van een studenten applicatie
//Input: Array met informatie over een studenten project
//Output: een geprint blok met de informatie van een studenten project
function StudentWork($value)
{
    echo "<div class=\"app_title\">";
    echo "<div class=\"studentapp\"> ";
    echo "<img src=\"assets/img/workByStudents/".$value['image']."\">";
    echo "<p>" . $value['description'] . "</p>";
    echo "</div></div>";
}

?>
