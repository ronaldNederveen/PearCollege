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
    <div class="workByStudents">

    <?php

    //Loading of the JSON file
    $projects = file_get_contents("workByStudents.json");

    //JSON data converting to PHP Array
    $projects = json_decode($projects, true);


    echo "<h1>Works made by students</h1>";
    echo "<div class=\"a\">";

    //Loop for all the JSON objects / different applications
    foreach ($projects as $project) {
        StudentWork($project);
    }

    echo "</div>";
    echo "</div>";

    //function to print information block about the student application
    //Input: Array with information about the student application     
    //Output: Printed block with information about student application

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
