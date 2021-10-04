<!DOCTYPE html>
<html lang="EN">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
    <div>
        <h1>Works made by students</h1>
        <div id="studentworks">
            <div class="studentapp"></div>
            <div class="studentapp"></div>
            <div class="studentapp"></div>
            <div class="studentapp"></div>
        </div>
    </div>
</body>

</html>

<?php
$data = file_get_contents("workByStudents.json");
$data = json_decode($data);
//var_dump($data);
    foreach ($data as $key => $value) {
        foreach ($value as $key => $waarde) {
            echo $key.": ".$waarde;
            echo "</br>";
        }

        echo $value["releaseDate"];
        //print_r($value);
        echo "</br>";
    }


function StudentWork($work){
    echo "<div class=\"studentapp\">";



    echo "</div>";


}

?>