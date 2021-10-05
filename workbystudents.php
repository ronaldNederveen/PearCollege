<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<?php
include "header.php";
?>


<?php
$data = file_get_contents("workByStudents.json");
$data = json_decode($data, true);
echo "<h1>Works made by students</h1>";
echo "<div class=\"a\">";
foreach ($data as $object) {
    StudentWork($object);
    echo "</br>";
}

echo "</div>";
echo "</div>";

function StudentWork($value)
{
    echo "<div class=\"app_title\">";
    echo "<div class=\"studentapp\"> ";
    echo "<img src=\"assets/img/workByStudents/".$value['image']."\">";
    echo "<p>" . $value['description'] . "</p>";
    echo "</div></div>";
}

?>
