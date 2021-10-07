<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="assets/css/style.css" />
    </head>
    <body>

    <?php
    include "header.php";
    ?>
    <div>

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
    }

    echo "</div>";
    echo "</div>";


    //functie voor het printen van een blok met informatie van een studenten applicatie
    //Input: Array met informatie over een studenten project
    //Output: een geprint blok met de informatie van een studenten project
    function StudentWork($value)
    {
        echo "<div class=\"app_box\">";
        echo "<div class=\"studentapp\"> ";
        echo "<img src=\"assets/img/workByStudents/".$value['image']."\">";
        echo "<div id=\"text\">";
        echo "<p class=\"title\">".$value['title']."<p>";
        echo "<p class=\"description\">".$value['description']."</p>";
        echo "<div id=\"q\">";
        echo "<p class=\"creator\">".$value['creator']."</p>";
        echo "<p class=\"releaseDate\">".$value['releaseDate']."</p>";
        echo "</div></div></div></div>";
    }

    ?>

        </body>
    </html>
